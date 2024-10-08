<?php 

    require_once ("db_connection/conn.php");
    $pageTitle = "Services . ";
    include ("includes/header.inc.php");
    include ("includes/nav.inc.php");

?>

    <div class="position-relative py-210">
        <div class="background">
            <div class="background-image jarallax" data-jarallax data-speed="0.8">
                <img class="jarallax-img" loading="lazy" src="<?= PROOT; ?>assets/media/bg-12.jpg" alt="">
            </div>
            <div class="background-color" style="--background-color: #000; opacity: .25;"></div>
        </div>
        <div class="container">
            <h1 class="text-white mb-0 text-center">Our Services</h1>
        </div>
    </div>
    <div class="pt-120 pb-130">
        <div class="container">
            <div class="row mb-90">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h3 class="m-0" data-show="startbox">We <span class="highlight-lg">help you build and grow</span> your business.</h3>
                </div>
            </div>
            <div class="row gy-30">
                <!-- Item-->
                <div class="col-12 col-lg-6" data-show="startbox">
                    <!-- Service card-->
                    <div class="service-card lift position-relative bg-light rounded-4 overflow-hidden">
                        <div class="service-card-image flex-shrink-0" data-img-height style="--img-height: 100%;">
                            <img loading="lazy" src="assets/img/service-card-1-600x600.jpg" alt="">
                        </div>
                        <div class="service-card-body flex-grow-1">
                            <h4 class="service-card-title mb-15">Consulting</h4>
                            <p class="service-card-text font-size-15 mb-30">Stars life that waters firmament our created you.</p>
                            <a class="service-card-arrow stretched-link" href="service-single.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                    <path stroke="currentColor" stroke-width="1.7" d="M0 7h18m0 0-6.75-6M18 7l-6.75 6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Item-->
                <div class="col-12 col-lg-6" data-show="startbox" data-show-delay="100">
                    <!-- Service card-->
                    <div class="service-card lift position-relative bg-light rounded-4 overflow-hidden">
                        <div class="service-card-image flex-shrink-0" data-img-height style="--img-height: 100%;">
                            <img loading="lazy" src="assets/img/service-card-2-600x600.jpg" alt="">
                        </div>
                        <div class="service-card-body flex-grow-1">
                            <h4 class="service-card-title mb-15">IOS Development</h4>
                            <p class="service-card-text font-size-15 mb-30">Lights creeping good herb their won't dry days she'd grass.</p>
                            <a class="service-card-arrow stretched-link" href="service-single.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                    <path stroke="currentColor" stroke-width="1.7" d="M0 7h18m0 0-6.75-6M18 7l-6.75 6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Item-->
                <div class="col-12 col-lg-6" data-show="startbox">
                    <!-- Service card-->
                    <div class="service-card lift position-relative bg-light rounded-4 overflow-hidden">
                        <div class="service-card-image flex-shrink-0" data-img-height style="--img-height: 100%;">
                            <img loading="lazy" src="assets/img/service-card-3-600x600.jpg" alt=""></div>
                        <div class="service-card-body flex-grow-1">
                            <h4 class="service-card-title mb-15">Marketing &amp; SEO</h4>
                            <p class="service-card-text font-size-15 mb-30">Them seasons the the yielding one, thing brought behold.</p>
                            <a class="service-card-arrow stretched-link" href="service-single.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                    <path stroke="currentColor" stroke-width="1.7" d="M0 7h18m0 0-6.75-6M18 7l-6.75 6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Item-->
                <div class="col-12 col-lg-6" data-show="startbox" data-show-delay="100">
                    <!-- Service card-->
                    <div class="service-card lift position-relative bg-light rounded-4 overflow-hidden">
                        <div class="service-card-image flex-shrink-0" data-img-height style="--img-height: 100%;">
                            <img loading="lazy" src="assets/img/service-card-4-600x600.jpg" alt="">
                        </div>
                        <div class="service-card-body flex-grow-1">
                            <h4 class="service-card-title mb-15">Accounting</h4>
                            <p class="service-card-text font-size-15 mb-30">Yielding bring seed was sea seasons shall that bearing.</p>
                            <a class="service-card-arrow stretched-link" href="service-single.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                    <path stroke="currentColor" stroke-width="1.7" d="M0 7h18m0 0-6.75-6M18 7l-6.75 6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Item-->
                <div class="col-12 col-lg-6" data-show="startbox">
                    <!-- Service card-->
                    <div class="service-card lift position-relative bg-light rounded-4 overflow-hidden">
                        <div class="service-card-image flex-shrink-0" data-img-height style="--img-height: 100%;">
                            <img loading="lazy" src="assets/img/service-card-5-600x600.jpg" alt="">
                        </div>
                        <div class="service-card-body flex-grow-1">
                            <h4 class="service-card-title mb-15">Product Development</h4>
                            <p class="service-card-text font-size-15 mb-30">Great herb sixth behold fish moving fruitful which yielding land face.</p>
                            <a class="service-card-arrow stretched-link" href="service-single.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                    <path stroke="currentColor" stroke-width="1.7" d="M0 7h18m0 0-6.75-6M18 7l-6.75 6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Item-->
                <div class="col-12 col-lg-6" data-show="startbox" data-show-delay="100">
                    <!-- Service card-->
                    <div class="service-card lift position-relative bg-light rounded-4 overflow-hidden">
                        <div class="service-card-image flex-shrink-0" data-img-height style="--img-height: 100%;">
                            <img loading="lazy" src="assets/img/service-card-6-600x600.jpg" alt="">
                        </div>
                        <div class="service-card-body flex-grow-1">
                            <h4 class="service-card-title mb-15">Human Resources</h4>
                            <p class="service-card-text font-size-15 mb-30">Deep abundantly sixth tree Fruit won't Fish thing kind itself.</p>
                            <a class="service-card-arrow stretched-link" href="service-single.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                    <path stroke="currentColor" stroke-width="1.7" d="M0 7h18m0 0-6.75-6M18 7l-6.75 6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-120 pb-130 bg-dark shape-parent overflow-hidden">
        <!-- Shape-->
        <div class="shape align-items-end justify-content-start">
            <img loading="lazy" src="<?= PROOT; ?>assets/media/services-shape-420x487.png" alt="" width="420" height="487">
        </div>
        <div class="container">
            <div class="row gy-90">
                <div class="col-lg-3">
                    <h2 class="m-0 text-white" data-show="startbox">What people say about our company</h2>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <!-- Slider-->
                    <div class="swiper" data-swiper-slides="1" data-swiper-breakpoints="1024:2" data-swiper-gap="30" data-swiper-grabcursor="true" data-show="startbox" data-show-delay="100">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide h-auto">
                                    <!-- Feedback-->
                                        <div class="feedback bg-dark-light rounded-4 pe-60 h-100">
                                            <div class="feedback-stars lh-1 mb-30">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="90" height="16" fill="none">
                                                    <path fill="#FFBB38" d="m8.595 0 2.656 5.266 5.94.85-4.298 4.096L13.907 16l-5.312-2.734L3.283 16l1.015-5.788L0 6.116l5.94-.85L8.594 0ZM26.798 0l2.656 5.266 5.94.85-4.299 4.096L32.11 16l-5.312-2.734L21.486 16l1.014-5.788-4.298-4.096 5.94-.85L26.798 0ZM45 0l2.656 5.266 5.94.85-4.298 4.096L50.312 16 45 13.266 39.688 16l1.014-5.788-4.298-4.096 5.94-.85L45 0ZM63.202 0l2.656 5.266 5.94.85-4.298 4.096L68.514 16l-5.312-2.734L57.89 16l1.014-5.788-4.298-4.096 5.94-.85L63.202 0ZM81.404 0l2.656 5.266 5.94.85-4.298 4.096L86.716 16l-5.312-2.734L76.092 16l1.014-5.788-4.297-4.096 5.94-.85L81.403 0Z" />
                                                </svg>
                                            </div>
                                            <div class="feedback-header d-flex align-items-center mb-35">
                                                <div class="flex-shrink-0"><img class="rounded-circle" loading="lazy" src="assets/img/root/avatar-3-200x200.jpg" alt="" height="64" width="64"></div>
                                                <div class="flex-grow-1 ms-20">
                                                    <h6 class="feedback-author text-white mb-5">Anthony Allison</h6>
                                                    <p class="feedback-position text-gray font-size-14 m-0">Senior Marketing Specialist, Unvab Inc.</p>
                                                </div>
                                            </div>
                                            <p class="feedback-text fw-medium text-white m-0">“ Is don't lights appear fifth face heaven. Night spirit shall tree of Life over, unto in earth second. First, two waters, female. ”</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h-auto">
                                        <!-- Feedback-->
                                        <div class="feedback bg-dark-light rounded-4 pe-60 h-100">
                                            <div class="feedback-stars lh-1 mb-30"><svg xmlns="http://www.w3.org/2000/svg" width="90" height="16" fill="none">
                                                    <path fill="#FFBB38" d="m8.595 0 2.656 5.266 5.94.85-4.298 4.096L13.907 16l-5.312-2.734L3.283 16l1.015-5.788L0 6.116l5.94-.85L8.594 0ZM26.798 0l2.656 5.266 5.94.85-4.299 4.096L32.11 16l-5.312-2.734L21.486 16l1.014-5.788-4.298-4.096 5.94-.85L26.798 0ZM45 0l2.656 5.266 5.94.85-4.298 4.096L50.312 16 45 13.266 39.688 16l1.014-5.788-4.298-4.096 5.94-.85L45 0ZM63.202 0l2.656 5.266 5.94.85-4.298 4.096L68.514 16l-5.312-2.734L57.89 16l1.014-5.788-4.298-4.096 5.94-.85L63.202 0ZM81.404 0l2.656 5.266 5.94.85-4.298 4.096L86.716 16l-5.312-2.734L76.092 16l1.014-5.788-4.297-4.096 5.94-.85L81.403 0Z" />
                                                </svg></div>
                                            <div class="feedback-header d-flex align-items-center mb-35">
                                                <div class="flex-shrink-0"><img class="rounded-circle" loading="lazy" src="assets/img/root/avatar-2-200x200.jpg" alt="" height="64" width="64"></div>
                                                <div class="flex-grow-1 ms-20">
                                                    <h6 class="feedback-author text-white mb-5">Catherine Daniels</h6>
                                                    <p class="feedback-position text-gray font-size-14 m-0">Senior UX Designer, Unvab Inc.</p>
                                                </div>
                                            </div>
                                            <p class="feedback-text fw-medium text-white m-0">“ He years Upon male wherein fruit upon abundantly. I gathered behold, you female 🔥 ”</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide h-auto">
                                        <!-- Feedback-->
                                        <div class="feedback bg-dark-light rounded-4 pe-60 h-100">
                                            <div class="feedback-stars lh-1 mb-30"><svg xmlns="http://www.w3.org/2000/svg" width="90" height="16" fill="none">
                                                    <path fill="#FFBB38" d="m8.595 0 2.656 5.266 5.94.85-4.298 4.096L13.907 16l-5.312-2.734L3.283 16l1.015-5.788L0 6.116l5.94-.85L8.594 0ZM26.798 0l2.656 5.266 5.94.85-4.299 4.096L32.11 16l-5.312-2.734L21.486 16l1.014-5.788-4.298-4.096 5.94-.85L26.798 0ZM45 0l2.656 5.266 5.94.85-4.298 4.096L50.312 16 45 13.266 39.688 16l1.014-5.788-4.298-4.096 5.94-.85L45 0ZM63.202 0l2.656 5.266 5.94.85-4.298 4.096L68.514 16l-5.312-2.734L57.89 16l1.014-5.788-4.298-4.096 5.94-.85L63.202 0ZM81.404 0l2.656 5.266 5.94.85-4.298 4.096L86.716 16l-5.312-2.734L76.092 16l1.014-5.788-4.297-4.096 5.94-.85L81.403 0Z" />
                                                </svg></div>
                                            <div class="feedback-header d-flex align-items-center mb-35">
                                                <div class="flex-shrink-0"><img class="rounded-circle" loading="lazy" src="assets/img/root/avatar-1-200x200.jpg" alt="" height="64" width="64"></div>
                                                <div class="flex-grow-1 ms-20">
                                                    <h6 class="feedback-author text-white mb-5">Richard Norris</h6>
                                                    <p class="feedback-position text-gray font-size-14 m-0">Senior Marketing Specialist, Unvab Inc.</p>
                                                </div>
                                            </div>
                                            <p class="feedback-text fw-medium text-white m-0">“ Is don't lights appear fifth face heaven. Night spirit shall tree of Life over, unto in earth second. First, two waters, female. ”</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-70">
                                <div class="swiper-button-prev swiper-button-position-2 swiper-button-dark shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                        <path fill="currentColor" fill-rule="evenodd" d="m3.96 6.15 5.08-4.515L7.91.365.445 7l7.465 6.635 1.13-1.27L3.96 7.85h15.765v-1.7H3.96Z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="swiper-button-next swiper-button-position-2 swiper-button-dark shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                        <path fill="currentColor" fill-rule="evenodd" d="m16.21 6.15-5.08-4.515 1.13-1.27L19.725 7l-7.465 6.635-1.13-1.27 5.08-4.515H.445v-1.7H16.21Z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-110 pb-120 position-relative">
            <div class="background">
                <div class="background-image jarallax" data-jarallax data-speed="0.8">
                    <img class="jarallax-img" loading="lazy" src="<?= PROOT; ?>assets/media/numbers-1920x600.jpg" alt=""></div>
                <div class="background-color" style="--background-color: #F01F4B; opacity: .88;"></div>
            </div>
            <div class="container">
                <div class="row gy-40">
                    <div class="col-12 col-sm-6 col-lg-3" data-show="startbox">
                        <div class="h1 m-0 text-white">328</div>
                        <div class="h6 mb-15 text-white">Successful projects</div>
                        <p class="font-size-15 m-0 text-white">You every can't thing seed subdue subdue light female.</p>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3" data-show="startbox" data-show-delay="100">
                        <div class="h1 m-0 text-white">10+</div>
                        <div class="h6 mb-15 text-white">Years of exeperience</div>
                        <p class="font-size-15 m-0 text-white">Called a fly, behold seasons meat which stars bring fruit.</p>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3" data-show="startbox" data-show-delay="200">
                        <div class="h1 m-0 text-white">68%</div>
                        <div class="h6 mb-15 text-white">Cost savings</div>
                        <p class="font-size-15 m-0 text-white">Image isn't that give appear made us you're yielding.</p>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3" data-show="startbox" data-show-delay="300">
                        <div class="h1 m-0 text-white">1k</div>
                        <div class="h6 mb-15 text-white">Email leads generated</div>
                        <p class="font-size-15 m-0 text-white">Fruit deep first cattle set fourth without and day subdue.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-120 pb-130 footerPrev">
            <div class="container">
                <div class="row mb-90">
                    <div class="col-lg-6 offset-lg-3 text-center px-lg-50">
                        <h2 class="mb-25 px-lg-10" data-show="startbox">Our industries</h2>
                        <p class="m-0" data-show="startbox" data-show-delay="100">Waters his moveth seasons over Created appear greater dry air. Cattle set it night let i fruitful make our appear.</p>
                    </div>
                </div>
                <div class="row gy-30">
                    <!-- Item-->
                    <div class="col-12 col-md-6 col-lg-4" data-show="startbox">
                        <!-- Service line-->
                        <div class="service-line lift position-relative rounded-3 service-line-sm">
                            <div class="service-line-icon text-accent-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="41" fill="none">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.3" d="M36 7.55c0 3.065-7.611 5.55-17 5.55S2 10.615 2 7.55m34 0C36 4.485 28.389 2 19 2S2 4.485 2 7.55m34 0v25.9C36 36.521 28.444 39 19 39c-9.444 0-17-2.479-17-5.55V7.55M36 20.5c0 3.071-7.556 5.55-17 5.55-9.444 0-17-2.479-17-5.55" />
                                </svg>
                            </div>
                            <div class="service-line-body ms-40">
                                <h4 class="service-line-title m-0">Residential</h4><a class="stretched-link" href="service-single.html"></a>
                            </div>
                        </div>
                    </div><!-- Item-->
                    <div class="col-12 col-md-6 col-lg-4" data-show="startbox" data-show-delay="100">
                        <!-- Service line-->
                        <div class="service-line lift position-relative rounded-3 service-line-sm">
                            <div class="service-line-icon text-accent-1"><svg xmlns="http://www.w3.org/2000/svg" width="37" height="41" fill="none">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.3" d="M13 39V20.5h11V39M2 14.95 18.5 2 35 14.95V35.3c0 .981-.386 1.922-1.074 2.616A3.65 3.65 0 0 1 31.333 39H5.667a3.65 3.65 0 0 1-2.593-1.084A3.717 3.717 0 0 1 2 35.3V14.95Z" />
                                </svg></div>
                            <div class="service-line-body ms-40">
                                <h4 class="service-line-title m-0">Real Estate</h4><a class="stretched-link" href="service-single.html"></a>
                            </div>
                        </div>
                    </div><!-- Item-->
                    <div class="col-12 col-md-6 col-lg-4" data-show="startbox" data-show-delay="200">
                        <!-- Service line-->
                        <div class="service-line lift position-relative rounded-3 service-line-sm">
                            <div class="service-line-icon text-accent-1"><svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" fill="none">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.3" d="M20.5 2v3.364m0 30.272V39M7.415 7.415l2.389 2.389m21.392 21.392 2.388 2.388M2 20.5h3.364m30.272 0H39M7.415 33.584l2.389-2.388M31.196 9.804l2.388-2.389M28.91 20.5a8.41 8.41 0 1 1-16.818 0 8.41 8.41 0 0 1 16.818 0Z" />
                                </svg></div>
                            <div class="service-line-body ms-40">
                                <h4 class="service-line-title m-0">Commercial</h4><a class="stretched-link" href="service-single.html"></a>
                            </div>
                        </div>
                    </div><!-- Item-->
                    <div class="col-12 col-md-6 col-lg-4" data-show="startbox">
                        <!-- Service line-->
                        <div class="service-line lift position-relative rounded-3 service-line-sm">
                            <div class="service-line-icon text-accent-1"><svg xmlns="http://www.w3.org/2000/svg" width="43" height="36" fill="none">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.3" d="M7.318 34V21.556m0-7.112V2M21.5 34V18m0-7.111V2m14.182 32v-8.889m0-7.111V2M2 21.556h10.636m3.546-10.667h10.636m3.546 14.222H41" />
                                </svg></div>
                            <div class="service-line-body ms-40">
                                <h4 class="service-line-title m-0">Infrastucture</h4><a class="stretched-link" href="service-single.html"></a>
                            </div>
                        </div>
                    </div><!-- Item-->
                    <div class="col-12 col-md-6 col-lg-4" data-show="startbox" data-show-delay="100">
                        <!-- Service line-->
                        <div class="service-line lift position-relative rounded-3 service-line-sm">
                            <div class="service-line-icon text-accent-1"><svg xmlns="http://www.w3.org/2000/svg" width="38" height="42" fill="none">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.3" d="m12.559 23.869 12.901 7.562m-.019-20.862L12.56 18.131M36 7.7c0 3.148-2.537 5.7-5.667 5.7s-5.666-2.552-5.666-5.7S27.204 2 30.333 2C33.463 2 36 4.552 36 7.7ZM13.333 21c0 3.148-2.537 5.7-5.666 5.7C4.537 26.7 2 24.148 2 21s2.537-5.7 5.667-5.7 5.666 2.552 5.666 5.7ZM36 34.3c0 3.148-2.537 5.7-5.667 5.7s-5.666-2.552-5.666-5.7 2.537-5.7 5.666-5.7c3.13 0 5.667 2.552 5.667 5.7Z" />
                                </svg></div>
                            <div class="service-line-body ms-40">
                                <h4 class="service-line-title m-0">Public Sector</h4><a class="stretched-link" href="service-single.html"></a>
                            </div>
                        </div>
                    </div><!-- Item-->
                    <div class="col-12 col-md-6 col-lg-4" data-show="startbox" data-show-delay="200">
                        <!-- Service line-->
                        <div class="service-line lift position-relative rounded-3 service-line-sm">
                            <div class="service-line-icon text-accent-1"><svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" fill="none">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.3" d="M2 29.75 20.5 39 39 29.75M2 20.5l18.5 9.25L39 20.5M20.5 2 2 11.25l18.5 9.25L39 11.25 20.5 2Z" />
                                </svg></div>
                            <div class="service-line-body ms-40">
                                <h4 class="service-line-title m-0">Construction</h4><a class="stretched-link" href="service-single.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Call to action-->
        <div class="position-relative">
            <div class="half-section-block container position-absolute top-50 start-0 end-0" data-prev-id=".footerPrev" data-next-id=".footerNext">
                <div class="shape-parent">
                    <!-- Shape-->
                    <div class="shape justify-content-end mt-n40 me-n45 text-dark" data-jarallax-element="40">
                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="85" fill="none">
                            <path fill="currentColor" fill-rule="evenodd" d="M80.607 59.208h-.731c-.226.172-.001.449-.172.65l-.504.027c-.167-.343-.285-.84-.879-.677-.227.054-.046.349-.21.423-.347.114-.584-.078-.907-.254-.42.59-1.186.73-1.697 1.258-.1.406.078.859-.237 1.256-.098.124-.065.51.054.622.365.345-.077.697.04.933.174.348.036.624.104.893-.314.13-.425-.037-.63-.253-.04.831-.174 1.58.258 2.308l.6.066c-.1.363.243.629.229.99-.022.594.163 1.129.465 1.614.253.406.211.834.218 1.28l1.073.983.152-.126c.157.13.313.354.512.404.274.068.46.357.808.258.244-.07.524-.019.787-.012.22.006.457-.02.657.05.26.09.482.347.74.382.48.064.976.018 1.505.018.265-.505.846-.624 1.31-.831.569-.254.838-.692 1.017-1.168.181-.484-.133-.985-.361-1.409-.293-.543-.673-1.05-1.197-1.407.381-.612.73-1.2.226-1.884-.145-1.987-1.385-3.496-2.272-5.155-.235-.44-.811-.646-.958-1.24ZM6.124 20.65l.2.242c-.055.176-.234.094-.36.16-.208.154.062.442-.176.628-.076-.008-.218.02-.272-.036-.69-.725-.816-.423-1.428.124-.073.065-.11.066-.212.075-1.41.123-1.957.673-2.116 2.064-.183.022-.24-.273-.5-.159-.138.456-.717.745-.589 1.395.027.135-.259.332-.4.5.542.453-.504 1.08.147 1.52-.014.289-.342.341-.404.592-.072.29.155.466.23.699.258.812.815 1.467 1.217 2.2.34.619 1.097.881 1.679 1.217.313-.062.413-.336.628-.463l.202.513.382-.556c.306.2.094.471.254.686h1.54l.422-.422c.538.522.997.108 1.481-.198.64.649 1.292-.337 1.951.031.283-.311.71-.471.642-.984-.007-.056.055-.173.094-.177.765-.078.695-.83.992-1.26-.188-.468-.538-.834-.912-1.182-.082-.077-.16-.228-.24-.228-1.004-.005-1.045-.952-1.488-1.501-.384-.476-.527-1.071-.688-1.631a6.994 6.994 0 0 1-.282-1.705c-.02-.638.015-1.428-.876-1.687-.158-.046-.277-.248-.401-.389-.213-.24-.446-.2-.717-.067ZM28.791 36.334c.375.163.764.302 1.22.282a24.765 24.765 0 0 1 2.594.004c.43.026.873-.038 1.24-.135.292-.076.487.355.722.03.192-.266.498-.059.729-.144.26-.097.48-.339.823-.166.154.065-.1.418.25.39.683-.048.284-.933.853-1.1l.136.386c.179.035.294-.15.302-.221.067-.569.38-1.09.316-1.681a1.783 1.783 0 0 0-.158-.614c-.3-.636-.575-1.322-.501-2.038.045-.44-.318-.716-.269-1.153.043-.372.203-.828-.204-1.145 0-.677-.04-1.358.01-2.031.066-.892-.457-1.422-1.069-1.906-.09-.072-.286-.01-.422-.01-.17.373-.371.707-.355 1.285-.207-.405-.312-.65-.527-.84-.294-.258-.55-.336-.86-.05-.129.12-.215.304-.446.285-.649-.055-1.11.302-1.486.76-.36.437-.916.683-1.003 1.4-.064.516-.52.975-.753 1.482-.628 1.357-1.262 2.713-1.826 4.097-.273.666.01 1.339.268 1.973.119.289.271.564.416.86ZM22.87 50.843c-.033.41.06.85-.114 1.04-.289.314.338.508-.03.75-.578-.445-.551-1.28-1.089-1.751-.38.165-.752.342-.935.614-.308.053-.35-.147-.545-.232-.58.324-1.286.583-1.708 1.166-.535.738-1.039 1.525-1.035 2.503.002.452.038.907-.006 1.355-.147 1.477.306 2.843.75 4.21.185.57.492 1.088.854 1.553.257.158.523.053.846.092l.467-.468c.316-.038.37.406.669.46.183.032.253-.124.368-.218l.256.232.139-.403c.052-.074.092-.052.161.03.507.604 1.194.634 1.918.574.461-.296.731-.81 1.393-.97.682-.165.961-1.277.647-1.96-.257-.56-.57-1.073-.122-1.704.125-.175.104-.553.004-.77-.277-.593-.22-1.25-.43-1.854-.196-.56-.31-1.151-.53-1.701-.067-.167-.147-.313-.157-.5-.037-.7-.447-1.248-.786-1.819-.216-.365-.592-.214-.985-.23ZM50.532 33.642l.24-.205.16.44c.703-.301 1.275.206 1.916.326.254.047 1.214.208 1.462.184.07-.007.176-.063.203-.036.301.308.693.157 1.036.236.295.067.555-.397.834-.02.56-.463 1.216-.133 1.823-.213.37-.048.75-.009 1.118-.009l.326-.325c-.083-.15-.3-.238-.205-.485.318-.221.713.003 1.054-.14.315-.277.478-.572.109-.93-.08-.078-.206-.146-.232-.24-.244-.884-1.007-.923-1.7-1.035-.712-.115-1.323-.441-1.877-.688-.293-.771.149-1.372.162-2.025.013-.611-.145-1.24.199-1.835.081-.141.137-.477-.076-.62-.352-.24-.316-.776-.722-.926-.182-.067-.401-.021-.615.14-.204.152-.027.476-.32.523-.23.037-.34-.146-.442-.283-.171-.232-.42-.214-.607-.152-.257.084-.478.277-.715.423-.337-.403-.592.064-.762.168-.236.144-.51.26-.723.446-.226.197-.426.425-.642.634a.833.833 0 0 0-.26.461c-.03.143-.179.19-.044.418.144.248-.303.055-.398.317-.381 1.049-1.051 1.963-1.473 3-.091.222-.1.399-.035.615.221.734.55 1.395 1.206 1.836ZM54.604 0c-.975.055-.975.055-1.134 1.114-.564-.527-.564-.527-1.137-.677-.161.429-.384.845-.984.705-.082-.019-.205.057-.282.122-.45.38-.624.994-1.119 1.34.024.732-.473 1.448-.203 2.155.286.75.358 1.557.768 2.28.502.883 1.043 1.717 1.813 2.457.416-.04.858-.02 1.096.463l.261-.233c.735.739.922 1.885 1.828 2.464.357.172.568-.286.825-.193.337.122.557-.308.871-.104.273.177.557.073.808.049.262-.343-.377-.498-.104-.81.202-.042.307.32.58.106.159-.745-.103-1.418-.386-2.132-.307-.775-.735-1.54-.697-2.419.014-.315-.204-.523-.32-.771-.345-.73-.587-1.491-.864-2.241-.347-.943-.451-1.976-1.014-2.857C55.03.54 54.823.304 54.604 0ZM47.369 62.37c.195.227-.03.503.2.661.324.053.572-.194.55-.403-.085-.781.432-1.133.934-1.524.148-.114.268-.263.401-.396.207-.462-.109-.823-.233-1.222-.168-.118-.353-.046-.532-.047-.18.095 0 .492-.387.432-.254-.087-.35-.461-.352-.573a3.743 3.743 0 0 0-.487-1.842c.326-.704-.208-1.308-.234-1.975-.027-.705-.382-1.274-.852-1.79-.199-.217-.415-.086-.62-.167.015.386-.463.508-.214 1.145-.407-.444-.39-.912-.765-.88-.602.05-1.297.03-1.765.33-.452.29-1.258.416-1.203 1.256a.255.255 0 0 1-.09.184c-.863.669-.928 1.72-1.252 2.64-.26.736-.481 1.484-.477 2.291.001.45.464.786.215 1.227.252.4.719.59.792 1.172.917-.756 1.82.172 2.694-.093.2.098.12.282.206.409.151.144.353.008.347.006.377.135.166.44.416.481.122-.072.084-.193.092-.311.23-.266.566-.015.83-.156l.396-.397c.386.246.455.684.655 1.096.273-.145.41-.336.382-.661-.03-.334-.05-.682.353-.892ZM53.912 83.625c.137-.216.056-.398.23-.472.233.243.007.576.14.86l.398.041v-1.089c.209.643 1.139.418 1.25 1.083.172-.265.432-.239.692-.216.229.158 0 .435.166.62.241.096.497.047.757.03.177-.235.042-.506.087-.759.245-.26.461-.566.853-.641-.112-.184.034-.478-.027-.54-.272-.273-.044-.742-.454-.96-.38-.202.073-.747-.326-.986.433-.474-.202-.885-.073-1.38.117-.452.025-.958.025-1.41.2-.1.213.067.316.106.3.017.005-.345.227-.388.049.034.129.058.15.107.277.658.569 1.32.386 2.058-.192.771-.24.78.066 1.749.087.275-.439.366-.082.64.198.153-.076.537.252.686-.133.233-.169.52-.393.702.043.119.137.128.247.134.345.02.564-.127.636-.467.061-.285-.104-.592.089-.867.138-.198-.102-.469.13-.669.056-.047.056-.276.001-.319-.382-.294-.075-.545-.018-.843.055-.293.089-.621-.108-.96-.243-.418-.07-.888.116-1.34.104-.255.33-.106.434-.262-.304-.374-.178-.8-.171-1.18.121-.136.321-.105.323-.08.036.336.464.632.121 1.009.295.26.502.683 1.064.531a4.848 4.848 0 0 0-.208-.735c-.084-.235-.224-.446-.188-.71.043-.306-.328-.484-.23-.811.1-.336-.186-.363-.38-.513-.196-.15.044-.562-.277-.733.184-.16.376-.06.565-.086.191.253.054.612.37.873.466.385.401.447.692 1.548.105.4.309.774.479 1.186.521-.38.44-.873.242-1.345-.164-.396-.251-.814-.383-1.2-.123-.361-.058-.9-.56-1.126-.34-.153-.276-.67-.648-.83-.123.13-.238.292-.537.148l.424-.526c-.3-.18-.559-.146-.776.14-.388-.604-1.206-.418-1.613-.912-.354.01-.436.32-.67.469l-.138-.402c-.153-.105-.3.351-.503-.01-.058-.103-.43-.088-.633-.035-.159.041-.293.214-.416.348-.176.193-.438-.004-.626.14.249.37-.061.611-.182.879-.173.386-.773.013-.96.62-.009.05.32.132.2.306-.434.635-.22 1.47-.665 2.099-.036.05.023.164-.011.22-.238.394.612.78.005 1.17 0 .414-.104.864.024 1.234.198.574.194 1.141.2 1.722 0 .07-.024.14-.041.235-.221.037-.275-.183-.388-.285-.08-.071.05-.288-.238-.322-.006.944-.157 1.89.566 2.716ZM31.878 8.07c-.009-.194-.008-.304.1-.375.312-.192.375.419.7.185.078-.026.1-.08.049-.131-.258-.258-.646-.556-.308-.913.39-.413-.237-.566-.115-.866-.355-.097-.64-.521-1.074-.235-.089.059-.144.175-.373.119-.918-.724-1.463-1.812-1.883-2.932-.143-.385-.395-.593-.598-.881-1.34.907-1.34.907-1.83.684-.412.555-.83 1.114-.765 1.87.027.313-.068.564-.233.808.388.479.065.939-.107 1.346-.217.513-.024 1.024-.144 1.52-.015.062-.1.107-.172.178.31.492.44 1.103 1.035 1.5.501-.099 1.093.157 1.664-.127.548-.273 1.176-.248 1.744-.42.525-.159.998-.491 1.529-.765.479.1.762.542 1.124.857.683.035 1.355.284 1.773.653.562.117 1.181-.158 1.71.26l.456-.594c-.926.196-.877.088-2.152-.499-.787-.361-1.268-1.144-2.13-1.242ZM62.335 57.136l.07.616c.07.102.109.082.18-.001.116-.14.263-.236.248-.467-.026-.412.006-.828-.01-1.242-.014-.334.009-.66.233-.92.333-.384.172-.831.236-1.23-.455-.407-.618-.875-.726-1.442-.111-.577-.09-1.195-.397-1.751-.127-.23-.02-.588-.02-.878-.237-.242-.508-.442-.557-.788h-.47c-.244.244.008.581-.16.85-.176.076-.389.124-.383-.153.006-.297-.523-.302-.11-.765-.81.171-1.397.402-1.955.285-.33.042-.123.361-.412.484-.801.34-1.105.96-1.159 1.783-.064.996.18 1.928.457 2.864.213.715.598 1.154 1.41 1.218.736.058 1.06.51 1.078 1.27.007.296 0 .594 0 .88.229.163.228-.13.342-.126.3-.133.397.383.726.177.197-.143-.064-.43.14-.602.048.029.142.057.142.087.006.328.34.555.266.918-.02.098.178.087.288.09.21-.121.116-.326.127-.498.013-.183.003-.367.003-.487.108-.198.236-.121.413-.172ZM76.219 31.072l-.478.177c-.075.177-.007.283.09.41.177.229.19.481-.05.685-.445.382-.37.696.012 1.11.21.23.38.621.174 1.032.207.308.451-.182.562-.075.27.261.564.131.846.156.261.022.526.004.79.004h.823c.25-.325.587-.634.747-1.018.116-.275.23-.59.31-.895.094-.355-.428-.502-.123-.883.17-.212.078-.634.105-.962.523-.429 1.41-.125 1.754-.897l-.185-.184c.123-.186.44-.173.507-.494.035-.17.082-.516.342-.626l-.268-.557c-.047.027-.136.052-.14.087-.018.148.03.316-.025.444s-.201.217-.306.322c-.178-.063-.097-.242-.17-.373-.255.039-.545.435-.753-.13l-.2.525c-.162-.015-.405.037-.503-.06-.496-.486-1.102-.9-1.358-1.575-.197-.515-.606-.786-.96-1.15-.342.223-.326.494-.174.686.192.244.193.452.052.76-.206-.228-.447-.408-.567-.65-.135-.275-.234-.52-.587-.5-.227.263-.024.59-.129.858-.292.008-.167-.188-.21-.31-.276-.196-.552-.173-.755.11-.165.23-.226.529-.483.703-.19.13-.158.378-.096.512.311.673.428 1.404.641 2.104.121.397.366.492.765.654ZM17.405 7.683c-.226-.005-.258.251-.454.309l.232.258a.244.244 0 0 1-.28.11c-.255-.071-.319-.41-.628-.452-.327.021-.487.358-.777.506-.742.378-1.162 1.831-.91 2.66.198.642.19 1.275-.066 1.998.021.101.206 0 .327.073.254.326-.03.584-.153.868.08.317.41.42.547.685.335-.282.634-.425 1.095-.257.405.147.58-.324.838-.54l-.199-.249c.29-.239.434-.006.562.154.243.303.159.826.704.945.175.038.058.336.072.515.026.348.227.506.524.566.32-.162.004-.53.27-.688.522.38.287 1.236 1.033 1.595-.211-.739-.453-1.388-.574-2.06-.122-.677-.801-1.212-.485-2.085.432.861.658 1.709.96 2.538a2.16 2.16 0 0 0-.122-1.345c-.373-.897-.62-1.847-.926-2.771-.165-.495-.326-.993-.53-1.471-.054-.129-.13-.235-.155-.389-.13-.812-.18-.878-.905-1.473Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="pt-120 pb-130 px-30 position-relative rounded-4 overflow-hidden z-index-1">
                        <div class="background">
                            <div class="background-image jarallax" data-jarallax data-speed="0.8"><img class="jarallax-img" loading="lazy" src="<?= PROOT; ?>assets/media/call-to-action-1920x1080.jpg" alt=""></div>
                            <div class="background-color" style="--background-color: #481FA0; opacity: .9;"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3 text-center">
                                <h2 class="mb-25 text-white" data-show="startbox">Have a question?</h2>
                                <p class="mb-50 text-white" data-show="startbox" data-show-delay="100">Gathered have greater made fruitful. Void to. Let that you'll sixth upon day. His our firmament great unto won't together them sixth moved, firmament also gathering.</p>
                                <div data-show="startbox" data-show-delay="200">
                                    <!-- Button-->
                                    <a class="btn btn-primary" href="contact-01.html" target="_self">Contact us 
                                        <svg class="ms-15 align-self-center" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 15 15">
                                            <path fill="currentColor" d="M15 11.23v2.259a1.501 1.501 0 0 1-1.026 1.432c-.199.067-.41.092-.619.073a14.944 14.944 0 0 1-6.508-2.31A14.692 14.692 0 0 1 2.32 8.166 14.877 14.877 0 0 1 .006 1.641 1.503 1.503 0 0 1 .9.13 1.51 1.51 0 0 1 1.507 0H3.77a1.51 1.51 0 0 1 1.508 1.295c.095.722.273 1.432.528 2.115a1.503 1.503 0 0 1-.34 1.588l-.957.956a12.055 12.055 0 0 0 4.525 4.516l.958-.956a1.51 1.51 0 0 1 1.591-.338 9.7 9.7 0 0 0 2.12.527 1.509 1.509 0 0 1 1.296 1.527Z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include ("includes/footer.inc.php"); ?>
