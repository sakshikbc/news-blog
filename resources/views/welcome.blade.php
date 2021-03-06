@extends('layouts.master')
@section('content')
<div class="home">
    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">
            <!-- Slider Item -->
            <div class="owl-item">
                <div class="home_slider_background" style="background-image:url({{ asset('images/home_slider.jpg')}})"></div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content">
                                    <div class="home_slider_item_category trans_200"><a href="category.html" class="trans_200">sport</a></div>
                                    <div class="home_slider_item_title">
                                        <a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a>
                                    </div>
                                    <div class="home_slider_item_link">
                                        <a href="post.html" class="trans_200">Continue Reading
                                            <svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
                                            <polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
                                        </svg>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Similar Posts -->
                <div class="similar_posts_container">
                    <div class="container">
                        <div class="row d-flex flex-row align-items-end">
                            <!-- Similar Post -->
                            <div class="col-lg-3 col-md-6 similar_post_col">
                                <div class="similar_post trans_200">
                                    <a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a>
                                </div>
                            </div>

                            <!-- Similar Post -->
                            <div class="col-lg-3 col-md-6 similar_post_col">
                                <div class="similar_post trans_200">
                                    <a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a>
                                </div>
                            </div>

                            <!-- Similar Post -->
                            <div class="col-lg-3 col-md-6 similar_post_col">
                                <div class="similar_post trans_200">
                                    <a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="home_slider_next_container">
                        <div class="home_slider_next" style="background-image:url(images/home_slider_next.jpg)">
                            <div class="home_slider_next_background trans_400"></div>
                            <div class="home_slider_next_content trans_400">
                                <div class="home_slider_next_title">next</div>
                                <div class="home_slider_next_link">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Slider Item -->
        <div class="owl-item">
            <div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>
            <div class="home_slider_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_slider_content">
                                <div class="home_slider_item_category trans_200"><a href="category.html" class="trans_200">sport</a></div>
                                <div class="home_slider_item_title">
                                    <a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a>
                                </div>
                                <div class="home_slider_item_link">
                                    <a href="post.html" class="trans_200">Continue Reading
                                        <svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
                                        <polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Similar Posts -->
        <div class="similar_posts_container">
            <div class="container">
                <div class="row d-flex flex-row align-items-end">

                    <!-- Similar Post -->
                    <div class="col-lg-3 col-md-6 similar_post_col">
                        <div class="similar_post trans_200">
                            <a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a>
                        </div>
                    </div>

                    <!-- Similar Post -->
                    <div class="col-lg-3 col-md-6 similar_post_col">
                        <div class="similar_post trans_200">
                            <a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a>
                        </div>
                    </div>

                    <!-- Similar Post -->
                    <div class="col-lg-3 col-md-6 similar_post_col">
                        <div class="similar_post trans_200">
                            <a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="home_slider_next_container">
                <div class="home_slider_next" style="background-image:url(images/home_slider_next.jpg)">
                    <div class="home_slider_next_background trans_400"></div>
                    <div class="home_slider_next_content trans_400">
                        <div class="home_slider_next_title">next</div>
                        <div class="home_slider_next_link">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Slider Item -->
    <div class="owl-item">
        <div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>
        <div class="home_slider_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_content">
                            <div class="home_slider_item_category trans_200"><a href="category.html" class="trans_200">sport</a></div>
                            <div class="home_slider_item_title">
                                <a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a>
                            </div>
                            <div class="home_slider_item_link">
                                <a href="post.html" class="trans_200">Continue Reading
                                    <svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
                                    <polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Similar Posts -->
    <div class="similar_posts_container">
        <div class="container">
            <div class="row d-flex flex-row align-items-end">

                <!-- Similar Post -->
                <div class="col-lg-3 col-md-6 similar_post_col">
                    <div class="similar_post trans_200">
                        <a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a>
                    </div>
                </div>

                <!-- Similar Post -->
                <div class="col-lg-3 col-md-6 similar_post_col">
                    <div class="similar_post trans_200">
                        <a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a>
                    </div>
                </div>

                <!-- Similar Post -->
                <div class="col-lg-3 col-md-6 similar_post_col">
                    <div class="similar_post trans_200">
                        <a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="home_slider_next_container">
            <div class="home_slider_next" style="background-image:url(images/home_slider_next.jpg)">
                <div class="home_slider_next_background trans_400"></div>
                <div class="home_slider_next_content trans_400">
                    <div class="home_slider_next_title">next</div>
                    <div class="home_slider_next_link">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</div>
                </div>
            </div>
        </div>

    </div>
</div>

</div>

<div class="custom_nav_container home_slider_nav_container">
    <div class="custom_prev custom_prev_home_slider">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
        <polyline fill="#FFFFFF" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
    </svg>
</div>
<ul id="custom_dots" class="custom_dots custom_dots_home_slider">
    <li class="custom_dot custom_dot_home_slider active"><span></span></li>
    <li class="custom_dot custom_dot_home_slider"><span></span></li>
    <li class="custom_dot custom_dot_home_slider"><span></span></li>
</ul>
<div class="custom_next custom_next_home_slider">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
    <polyline fill="#FFFFFF" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
</svg>
</div>
</div>

</div>
</div>
    
    <!-- Page Content -->
    <div class="container">
        <h2 class="mb-3 mt-5 text-center text-black">We Provide</h2>
        <div class="row">
            <div class="col-4-lg ml-5 mr-5 mb-5 mt-5">
                <a href="#">
                    <div class="card shadow-1" style="width:18rem;">
                        <img src="{{ asset('images/netellar.jpeg')}}" alt="card one" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">
                                Scrill / Netellar 
                            </h5>
                            <p class="cart-text">
                                Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions 
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4-lg ml-5 mr-5 mb-5 mt-5">
                <a href="/matches">
                    <div class="card shadow-1" style="width:18rem;">
                        <img src="{{ asset('images/2.jpg')}}" alt="card one" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">
                                Cricket Prediction
                            </h5>
                            <p class="cart-text">
                                Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions 
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4-lg ml-5 mb-5 mt-5">
                <a href="#">
                    <div class="card shadow-1" style="width:18rem;">
                        <img src="{{ asset('images/3.jpg')}}" alt="card one" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">
                                Dream 11 Prediction 
                            </h5>
                            <p class="cart-text">
                                Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions 
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="features-container section-container bg-white py-5 mb-10">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 features section-description wow fadeIn text-center mb-2">
                    <h2 class="mb-3">Our Services</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 features-box wow fadeInUp text-center">
                    <div class="features-box-icon">
                        <span aria-hidden="true" class="icon_cogs"></span>
                    </div>
                    <h3>Easy To Use</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                </div>
                <div class="col-sm-4 features-box wow fadeInDown text-center">
                    <div class="features-box-icon">
                        <span aria-hidden="true" class="icon_pencil"></span>
                    </div>
                    <h3>Responsive Design</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                </div>
                <div class="col-sm-4 features-box wow fadeInUp text-center">
                    <div class="features-box-icon">
                        <span aria-hidden="true" class="fa fa-globe"></span>
                    </div>
                    <h3>Bootstrap Engine</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-white py-5 mb-10">
        <h2 class="mb-5 text-center text-black underline">Latest News</h2>
        <div class="flex justify-between news-mobile">
        <div class="max-w-xs rounded overflow-hidden shadow-lg mx-auto mb-4">
            <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                <p class="text-grey-darker text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>
            <div class="px-6 py-4">
                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
            </div>
        </div>
        <div class="max-w-xs rounded overflow-hidden shadow-lg mx-auto mb-4">
            <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                <p class="text-grey-darker text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>
            <div class="px-6 py-4">
                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
            </div>
        </div>
        <div class="max-w-xs rounded overflow-hidden shadow-lg mx-auto mb-4">
            <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                <p class="text-grey-darker text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>
            <div class="px-6 py-4">
                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
            </div>
        </div>
        <div class="max-w-xs rounded overflow-hidden shadow-lg mx-auto mb-4">
            <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                <p class="text-grey-darker text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>
            <div class="px-6 py-4">
                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
            </div>
        </div>
    </div>
    </div>


    
@endsection

