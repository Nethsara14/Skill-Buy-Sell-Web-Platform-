<?php
require "../db/connection.php";

$email = $_POST["email"];
$action = $_POST["action"];

if ($action == "verify") {

    $code = $_POST["code"];

    if (empty($code)) {
        echo "Please enter the verification code.";
    } else {
        $result = Database::search("SELECT `id` FROM `user` WHERE `email`=?", "s", [$email]);

        if ($result && $result->num_rows == 0) {
            echo "user not found";
        } else {
            $record = $result->fetch_assoc();

            $codeResult = Database::search(
                "SELECT `token_hash`, `expiry` FROM `password_reset_tokens` WHERE `user_id`=? ORDER BY `created_at` DESC LIMIT 1",
                "i",
                [$record["id"]]

            );

            if (!$codeResult || $codeResult->num_rows == 0) {
                echo "No reset request found. Please request a new code.";
            } else {
                $codeRecord = $codeResult->fetch_assoc();
                $expiry = strtotime($codeRecord["expiry"]);
                $now = time();
                if ($now > $expiry) {
                    echo "The verification code has expired.";
                } elseif (password_verify($code, $codeRecord["token_hash"])) {
                    echo "success";
                } else {
                    echo "Invalid verification code";
                }
            }
        }
    }
    
} elseif ($action == "reset") {

    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    if (empty($password)) {
        echo "Please enter the new password.";
    } elseif ($password !== $cpassword) {
        echo "Passwords do not match.";
    } elseif (strlen($password) < 8) {
        echo "Password must be at least 8 characters long.";
    } else {

        $result = Database::search("SELECT `id` FROM `user` WHERE `email`=?", "s", [$email]);

        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc();

            Database::iud("UPDATE `user` SET `password_hash`=? WHERE `id`=?", "si", [password_hash($password, PASSWORD_DEFAULT), $user["id"]]);

            Database::iud("DELETE FROM `password_reset_tokens` WHERE `user_id`=?", "i", [$user["id"]]);
            echo "success";
        } else {
            echo "user not found";
        }
    }
} else {
    echo "Invalid action.";
}
