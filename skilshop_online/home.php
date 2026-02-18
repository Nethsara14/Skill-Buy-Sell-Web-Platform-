<?php include("header.php"); ?>

<!-- Hero -->
<section class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8 items-center">


            <div>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Learn & Earn Skill Today</h1>
                <p class="text-blue-100 text-lg mb-6">Connect with expert skill seller and buyer in our thriving community.</p>


                <!--Search bar-->
                <div class="mb-6 bg-white rounded-lg p-3 flex gap-2">
                    <input type="text" placeholder="What skill are your looking for?"
                        class="flex-1 bg-transparent text-gray-900 outline-none text-sm" />
                    <button class="bg-blue-600 text-white px-6 py-2 rounded-lg
                   hover:bg-blue-700 font-medium text-sm transition-colors">Search</button>
                </div>

                <div class="flex gap-4 flex-col md:flex-row">
                    <?php if (isset($_SESSION['user_email'])): ?>

                        <?php if ($userRole == "buyer") : ?>
                            <a href="buyer-dashboard.php" class="bg-white text-blue-600 px-6 py-3 rounded-lg 
                         font-bold hover:shadow-lg inline-block transition-all">Go to dashboard</a>
                            <a href="#browse" class="border-2 border-white text-white px-6 py-3 rounded-lg
                        font-bold hover:bg-white hover:bg-opacity-10 inline-block transition-all">Browse Skills</a>
                        <?php endif; ?>

                        <?php if ($userRole == "seller") : ?>
                            <a href="seller-dashboard.php" class="bg-white text-blue-600 px-6 py-3 rounded-lg 
                         font-bold hover:shadow-lg inline-block transition-all">Go to dashboard</a>
                            <a href="#" class="border-2 border-white text-white px-6 py-3 rounded-lg
                        font-bold hover:bg-white hover:bg-opacity-10 inline-block transition-all">Create skills</a>
                        <?php endif; ?>

                    <?php else : ?>
                        <a href="index.php" class="bg-white text-blue-600 px-6 py-3 rounded-lg 
                         font-bold hover:shadow-lg inline-block transition-all">Get Started</a>
                        <a href="#" class="border-2 border-white text-white px-6 py-3 rounded-lg
                        font-bold hover:bg-white hover:bg-opacity-10 inline-block transition-all">Learn More</a>
                    <?php endif ?>

                </div>

            </div>

            <div class="hidden-md:block">
                <div class="bg-white bg-opacity-10 rounded-xl p-8 backdrop-blur-sm">
                    <div class="space-y-4">
                        <div class="flex items-center gap-3 text-blue-100">
                            <span class="text-2xl">👨‍🏫</span>
                            <p>Expert Instructors redy to teach</p>
                        </div>

                        <div class="flex items-center gap-3 text-blue-100">
                            <span class="text-2xl">🚀</span>
                            <p>Grow your skills or business</p>
                        </div>

                        <div class="flex items-center gap-3 text-blue-100">
                            <span class="text-2xl">💰</span>
                            <p>Secured transactions</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>




    </div>
</section>


<!-- Featured carousel  -->
<section id="browse" class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm;px-6 lg:px-8">
    <div class="mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Featured Skills</h2>
        <p class="text-gray-600 text-lg">Discover Trending skill from top sellers.</p>
    </div>


    <!--Carousel container -->
    <div class="relative group">
        <div class="overflow-hidden rounded-xl">

            <!-- Items -->
            <div id="carousel" class="flex transition-transform duration-500 ease-out" style="transform: translateX(0);">


                <div class="carousel-item flex-shrink-0 w-full md:w-1/3 px-3 pb-4">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all h-full">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                            class="w-full h-40 object-cover">
                        <div class="p-5">
                            <h3 class="font-bold text-lg mb-2">UI/UX Design Mastery</h3>
                            <p class="text-gray-600 text-sm mb-4">Learn modern design principles</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold">Rs. 5,000</span>
                                <span class="text-yellow-500 font-bold">⭐ 4.9 (265)</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="carousel-item flex-shrink-0 w-full md:w-1/3 px-3 pb-4">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all h-full">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                            class="w-full h-40 object-cover">
                        <div class="p-5">
                            <h3 class="font-bold text-lg mb-2">Web Development</h3>
                            <p class="text-gray-600 text-sm mb-4">Learn modern web development skills</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold">Rs. 7,000</span>
                                <span class="text-yellow-500 font-bold">⭐ 4.8 (465)</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="carousel-item flex-shrink-0 w-full md:w-1/3 px-3 pb-4">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all h-full">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                            class="w-full h-40 object-cover">
                        <div class="p-5">
                            <h3 class="font-bold text-lg mb-2">Mobile app development</h3>
                            <p class="text-gray-600 text-sm mb-4">Learn modern mobile app development skills</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold">Rs. 10,000</span>
                                <span class="text-yellow-500 font-bold">⭐ 4.6 (765)</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="carousel-item flex-shrink-0 w-full md:w-1/3 px-3 pb-4">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all h-full">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                            class="w-full h-40 object-cover">
                        <div class="p-5">
                            <h3 class="font-bold text-lg mb-2">Vedio production app</h3>
                            <p class="text-gray-600 text-sm mb-4">Learn modern video production skills</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold">Rs. 8,000</span>
                                <span class="text-yellow-500 font-bold">⭐ 4.9 (865)</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="carousel-item flex-shrink-0 w-full md:w-1/3 px-3 pb-4">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all h-full">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                            class="w-full h-40 object-cover">
                        <div class="p-5">
                            <h3 class="font-bold text-lg mb-2">Vedio production app</h3>
                            <p class="text-gray-600 text-sm mb-4">Learn modern video production skills</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold">Rs. 8,000</span>
                                <span class="text-yellow-500 font-bold">⭐ 4.9 (865)</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="carousel-item flex-shrink-0 w-full md:w-1/3 px-3 pb-4">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all h-full">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                            class="w-full h-40 object-cover">
                        <div class="p-5">
                            <h3 class="font-bold text-lg mb-2">Vedio production app</h3>
                            <p class="text-gray-600 text-sm mb-4">Learn modern video production skills</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold">Rs. 8,000</span>
                                <span class="text-yellow-500 font-bold">⭐ 4.9 (865)</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="carousel-item flex-shrink-0 w-full md:w-1/3 px-3 pb-4">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all h-full">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                            class="w-full h-40 object-cover">
                        <div class="p-5">
                            <h3 class="font-bold text-lg mb-2">Vedio production app</h3>
                            <p class="text-gray-600 text-sm mb-4">Learn modern video production skills</p>
                            <div class="flex justify-between items-center">
                                <span class="text-blue-600 font-bold">Rs. 8,000</span>
                                <span class="text-yellow-500 font-bold">⭐ 4.9 (865)</span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>


        <!--navigation button -->
        <button onclick="slideCarousel(-1);" class="absolute left-0 top-1/2 -translate-y-1/2  -translate-x-5 bg-blue-600 text-white p-3
                         rounded-full hover:bg-blue-700 transition-all hover:scale-110 z-10 opacity-0 group-hover:opacity-100">
            < </button>
                <button onclick="slideCarousel(1);" class="absolute right-0 top-1/2 -translate-y-1/2  translate-x-5 bg-blue-600 text-white p-3
                         rounded-full hover:bg-blue-700 transition-all hover:scale-110 z-10 opacity-0 group-hover:opacity-100"> > </button>


    </div>


    <!-- Carousel indicaters -->
    <div id="carousel-indicators" class="flex justify-center gap-2 mt-8">
        <button onclick="goToSlide(0);" class="carousel-dot w-3 h-3 rounded-full bg-blue-600 transition-all"></button>
        <button onclick="goToSlide(1);" class="carousel-dot w-3 h-3 rounded-full bg-gray-600 transition-all"></button>
    </div>

</section>

<!-- categoris section -->
<section id="categories" class="bg-gray-50 py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-12 text-center">Explore Categories</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">

            <a href="#" class="group bg-white p-6 rounded-lg text-center shadow hover:shadow-lg transition-all cursor-pointer hover:scale-105 hover:border-2 hover:border-blue-600">
                <div class="text-5xl mb-3 group-hover:scale-110 transition transform">🎨</div>
                <p class="font-semibold text-gray-800 group-hover:text-blue-600">Design</p>
            </a>

            <a href="#" class="group bg-white p-6 rounded-lg text-center shadow hover:shadow-lg transition-all cursor-pointer hover:scale-105 hover:border-2 hover:border-blue-600">
                <div class="text-5xl mb-3 group-hover:scale-110 transition transform">💻</div>
                <p class="font-semibold text-gray-800 group-hover:text-blue-600">Development</p>
            </a>

            <a href="#" class="group bg-white p-6 rounded-lg text-center shadow hover:shadow-lg transition-all cursor-pointer hover:scale-105 hover:border-2 hover:border-blue-600">
                <div class="text-5xl mb-3 group-hover:scale-110 transition transform">📱</div>
                <p class="font-semibold text-gray-800 group-hover:text-blue-600">Mobile</p>
            </a>

            <a href="#" class="group bg-white p-6 rounded-lg text-center shadow hover:shadow-lg transition-all cursor-pointer hover:scale-105 hover:border-2 hover:border-blue-600">
                <div class="text-5xl mb-3 group-hover:scale-110 transition transform">🎓</div>
                <p class="font-semibold text-gray-800 group-hover:text-blue-600">Education</p>
            </a>

            <a href="#" class="group bg-white p-6 rounded-lg text-center shadow hover:shadow-lg transition-all cursor-pointer hover:scale-105 hover:border-2 hover:border-blue-600">
                <div class="text-5xl mb-3 group-hover:scale-110 transition transform">🎥</div>
                <p class="font-semibold text-gray-800 group-hover:text-blue-600">Video</p>
            </a>

            <a href="#" class="group bg-white p-6 rounded-lg text-center shadow hover:shadow-lg transition-all cursor-pointer hover:scale-105 hover:border-2 hover:border-blue-600">
                <div class="text-5xl mb-3 group-hover:scale-110 transition transform">💼</div>
                <p class="font-semibold text-gray-800 group-hover:text-blue-600">Business</p>
            </a>

        </div>
    </div>
</section>

<!-- Testimonials section -->
<section id="" class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12 text-center"> What Our Users say</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-2xl transition-shadow hover:scale-105 duration-300">
            <div class="flex items-center mb-4">
                <img src="https://i.pravatar.cc/40?img=1" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <p class="font-bold text-gray-900">John Doe</p>
                    <p class="text-sm text-yellow-400">⭐⭐⭐⭐⭐</p>
                </div>
            </div>
            <p class="text-gray-600">"This platform has completely transformed my learning experience. The courses are well-structured and the instructors are knowledgeable."</p>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-2xl transition-shadow hover:scale-105 duration-300">
            <div class="flex items-center mb-4">
                <img src="https://i.pravatar.cc/40?img=2" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <p class="font-bold text-gray-900">Jane Smith</p>
                    <p class="text-sm text-yellow-400">⭐⭐⭐⭐</p>
                </div>
            </div>
            <p class="text-gray-600">"The courses are engaging and the content is up-to-date. I've learned so much in a short amount of time."</p>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-2xl transition-shadow hover:scale-105 duration-300">
            <div class="flex items-center mb-4">
                <img src="https://i.pravatar.cc/40?img=3" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <p class="font-bold text-gray-900">Michael Johnson</p>
                    <p class="text-sm text-yellow-400">⭐⭐⭐⭐⭐</p>
                </div>
            </div>
            <p class="text-gray-600">"This platform has completely transformed my learning experience. The courses are well-structured and the instructors are knowledgeable."</p>
        </div>

    </div>
</section>

<!-- stats section -->
<section class="py-16 md:py-24 bg-gradient-to-r from-blue-600 to-indigo-600 text-white ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">

            <div class="hover:scale-110 transition-transform duration-300 cursor-pointer">
                <div class="text-4xl md:text-5xl font-bold mb-2">50K</div>
                <p class="text-blue-100">Active users</p>
            </div>

            <div class="hover:scale-110 transition-transform duration-300 cursor-pointer">
                <div class="text-4xl md:text-5xl font-bold mb-2">10K</div>
                <p class="text-blue-100">Enrolled students</p>
            </div>

            <div class="hover:scale-110 transition-transform duration-300 cursor-pointer">
                <div class="text-4xl md:text-5xl font-bold mb-2">9K</div>
                <p class="text-blue-100">Courses completed</p>
            </div>

            <div class="hover:scale-110 transition-transform duration-300 cursor-pointer">
                <div class="text-4xl md:text-5xl font-bold mb-2">100M</div>
                <p class="text-blue-100">Active instructors</p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">

    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12 text-center">How It Works</h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

        <div class="text-center group">
            <div class="bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full w-16 h-16 flex items-center justify-center
                        text-2xl text-white mx-auto mb-4 group-hover:scale-110 transition-transform">1</div>
            <h3 class="font-bold text-lg mb-2">Create account</h3>
            <p class="text-gray-600 text-sm">Sign up for an account to get started.</p>
        </div>

        <div class="text-center group">
            <div class="bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full w-16 h-16 flex items-center justify-center 
                        text-2xl text-white mx-auto mb-4 group-hover:scale-110 transition-transform">2</div>
            <h3 class="font-bold text-lg mb-2">Browse courses</h3>
            <p class="text-gray-600 text-sm">Browse through our extensive list of courses.</p>
        </div>

        <div class="text-center group">
            <div class="bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full w-16 h-16 flex items-center justify-center 
                        text-2xl text-white mx-auto mb-4 group-hover:scale-110 transition-transform">3</div>
            <h3 class="font-bold text-lg mb-2">Connect & learn</h3>
            <p class="text-gray-600 text-sm">Connect with peers and learn from experts in your field.</p>
        </div>

        <div class="text-center group">
            <div class="bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full w-16 h-16 flex items-center justify-center 
                        text-2xl text-white mx-auto mb-4 group-hover:scale-110 transition-transform">4</div>
            <h3 class="font-bold text-lg mb-2">Grow & earn</h3>
            <p class="text-gray-600 text-sm">Earn rewards and grow your skills with our platform.</p>
        </div>

    </div>
</section>


<!-- called to action -->
<section id="" class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl p-8 md:p-16 text-center text-white shadow-2xl">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to start learning?</h2>
        <p class="text-blue-100 text-lg mb-8">Join our community of learners and start your journey today.</p>

        <div class="flex flex-col md:flex-row gap-4 justify-center">
            <?php if (isset($_SESSION['user_email'])) : ?>

                <?php if ($userRole == "buyer") : ?>
                    <a href="buyer-dashboard.php" class="bg-white text-blue-600 py-3 px-8 rounded-lg font-bold hover:shadow-2xl 
                                                         inline-block transition-all hover:scale-105">Go to Dashboard</a>
                    <a href="#Browse" class="border-2 border-white text-white px-8 py-3 rounded-lg font-bold hover:bg-white hover:bg-opacity-20 
                                             inline-block transition-all">Explore More</a>


                <?php elseif ($userRole == "seller") : ?>
                    <a href="seller-dashboard.php" class="bg-white text-blue-600 py-3 px-8 rounded-lg font-bold hover:shadow-2xl 
                                                          inline-block transition-all hover:scale-105">Go to Dashboard</a>
                    <a href="#" class="border-2 border-white text-white px-8 py-3 rounded-lg font-bold hover:bg-white hover:bg-opacity-20 
                                       inline-block transition-all">Create New Skill</a>

                <?php endif; ?>


            <?php else : ?>
                <a href="index.php" class="bg-white text-blue-600 py-3 px-8 rounded-lg font-bold hover:shadow-2xl inline-block 
                                           transition-all hover:scale-105">Sign Up to get started</a>
                <a href="#Browse" class="border-2 border-white text-white px-8 py-3 rounded-lg font-bold hover:bg-white 
                                         hover:bg-opacity-20 inline-block transition-all">Browse Courses</a>

            <?php endif; ?>
        </div>
    </div>
</section>

<script>
    var currentSlideIndex = 0; 
    var itemsPreView = window.innerWidth >= 768 ? 3 : 1;
    var totalItems = 6;
    var maxSlide = totalItems - itemsPreView; 

    function slideCarousel(direction) {
        currentSlideIndex += direction;

        if (currentSlideIndex > maxSlide) {
            currentSlideIndex = 0;
        } else if (currentSlideIndex < 0) {
            currentSlideIndex = maxSlide;
        }
        updateCarousel();
    }

    function goToSlide(slide) {
        currentSlideIndex = slide;
        updateCarousel();
    }

    function updateCarousel() {
        var carousel = document.getElementById("carousel");
        var slideWidth = 100 / itemsPreView;
        var offset = -(currentSlideIndex * slideWidth);
        carousel.style.transform = `translateX(${offset}%)`; // Backticks (``) අනිවාර්යයෙන්ම අවශ්‍යයි

        // Indicators (Dots) update කිරීම
        var dotsContainer = document.getElementById("carousel-indicators");
        var dots = dotsContainer.querySelectorAll(".carousel-dot");

        dots.forEach((dot, index) => {
            if (index == currentSlideIndex) {
                dot.classList.add("bg-blue-600");
                dot.classList.remove("bg-gray-300");
            } else {
                dot.classList.remove("bg-blue-600");
                dot.classList.add("bg-gray-300");
            }
        });
    }

    // Auto slide සෑම තත්පර 5කට වරක්
    setInterval(() => {
        slideCarousel(1);
    }, 4000);


    //handle responcive items per view
    window.addEventListener('resize', () => {
        updateCarousel();
    });


    //initialize dots onload
    window.addEventListener('load', () => {
        var dotContainer = document.getElementById("carousel-indicators");
        dotContainer.innerHTML = ''; // Clear existing dots
        for (let i = 0; i <= maxSlide; i++) {
            var dot = document.createElement('button');
            dot.onclick = () => goToSlide(i);
            dot.className = `carousel-dot w-3 h-3 rounded-full  transition-all ${i == 0 ? 'bg-blue-600' : 'bg-gray-300'}`;
            dotContainer.appendChild(dot);
        }
    });
</script>



<?php include("footer.php"); ?>
