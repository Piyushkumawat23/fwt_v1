@extends('frontend.layouts.app')

@section('content')


    <!-- ? Preloader Start -->

    <!-- Preloader Start -->

    <!-- header end -->
    <main>
        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".6s">A Steadfast Stroke to Fulfill Social Dreams</h1>
                                    <P data-animation="fadeInUp" data-delay=".8s">Branch Office/Postal Address – Handicraft Fedration Society, Mamta Circle, Mal Mohalla, Deoli Distt. Tonk Raj.</P>
                                    <!-- Hero-btn -->
                                    {{-- <div class="hero__btn">
                                        <a href="{{ url('/contact') }}" class="btn hero-btn mb-10" data-animation="fadeInLeft"
                                            data-delay=".8s">Donate</a>
                                        <a href="{{ url('/contact') }}" class="cal-btn ml-15" data-animation="fadeInRight"
                                            data-delay="1.0s">
                                            <i class="flaticon-null"></i>
                                            <p>+91 9571379419</p>
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                {{-- <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".6s">Our Helping to<br> the world.</h1>
                                    <P data-animation="fadeInUp" data-delay=".8s">Onsectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut bore et dolore magnt, sed do eiusmod.</P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="industries.html" class="btn hero-btn mb-10" data-animation="fadeInLeft"
                                            data-delay=".8s">Donate</a>
                                        <a href="industries.html" class="cal-btn ml-15" data-animation="fadeInRight"
                                            data-delay="1.0s">
                                            <i class="flaticon-null"></i>
                                            <p>+12 1325 41</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- slider Area End-->
        <!--? Services Area Start -->
        <div class="service-area section-padding40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>What we are doing</span>
                            <h2>We Are In A Mission To Help The Helpless</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <img src="{{ asset('public/assets/frontend/img/15268838.png') }}" alt="Women Empowerment Icon" width="60">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="{{ url('/') }}">Women and Youth Empowerment</a></h5>
                                <p>the process of equipping these groups with the resources, opportunities,
                                   and agency to make their own decisions and control their own lives. This
                                  involves promoting their social, economic, political, and personal development, ultimately</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat active text-center mb-50">
                            <div class="cat-icon">
                                <img src="{{ asset('public/assets/frontend/img/5632179.png') }}" alt="Women Empowerment Icon" width="60">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="{{ url('/') }}">Handicrafts Development</a></h5>
                                <p>the efforts aimed at promoting and supporting the handicraft
                                    industry, which involves the creation of unique, handcrafted
                                    items using traditional skills and techniques. This includes
                                    initiatives empowerment, skill development, market access, andb
                                    infrastructure improvements, etc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <img src="{{ asset('public/assets/frontend/img/water-management-icon.png') }}" alt="Women Empowerment Icon" width="60">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="{{ url('/') }}">Water Resource Management</a></h5>
                                <p>the process of planning, developing, and managing water resources,
                                     encompassing both water quantity and quality, across all water uses.
                                      including human consumption, agriculture, industry, and the environment etc. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End -->
        <!--? About Law Start-->
        <section class="about-low-area section-padding4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                {{-- <span>About our foundetion</span> --}}
                                <h2>Foreword</h2>
                            </div>
                            <p>Hello Friends!!!!
                                We are happy to present the Annual Progress Report of Handicraft Fedration Society (HFS)
                                for the year 2022- 2023, 2023-24, 2024-25 which has been an extremely gratifying year.
                                HFS is a nonprofit organization serving the community since 2012.  We are resolute to play
                                a perceptible role in the betterment of disadvantaged people. HFS is working with holistic
                                approach in the fields of child education, women & child health, women empowerment, youth
                                upliftment, microfinance, Health, Handicraft Artisan Devlopment, Skill and vocanation
                                training programme, De addction Center, natural resource management and urbanization &
                                Rural Devlopment. We are very grateful to the community and the kind donors who believed
                                on our credibility and supported us. Our organization is working with the motive of group
                                dynamism and we sincerely care for the feelings of societal change through common participation.
                                 HFS is presently working in the some districts of Rajasthan, i.e.  Bundi, Tonk, Kota, Shahpura,
                                  Bhilwara, Ajmer, Beawar Our organization is also planning to expand its working area in near future.</p>
                            {{-- <p>Lorem ipvsum dolor sit amext, consectetur adipisicing elit, smod tempor incididunt ut
                                labore et dolore.</p> --}}
                        </div>
                        <a href="{{ url('/about') }}" class="btn">About US</a>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            {{-- <div class="about-font-img d-none d-lg-block">


                                <img src="{{ asset('public/assets/frontend/img/gallery/b0595a0b-cc90-4ade-9232-6ed96f2742d5.png') }} " alt="Profile">

                            </div> --}}
                            <div class="about-back-img ">

                                <img src="{{ asset('public/assets/frontend/img/gallery/about-home.jpeg') }} " alt="Profile">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Law End-->
        <!-- Our Cases Start -->
        <div class="our-cases-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>Our Cases you can see</span>
                            <h2>Explore our latest causes that we works </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cases mb-40">
                            <div class="cases-img">
                                <img src="{{ asset('public/assets/frontend/img/gallery/Handicraft1.png') }} " alt="Profile">

                            </div>
                            <div class="cases-caption">
                                <h3><a href="#">Handicraft Artisan Development Programme</a></h3>
                                <!-- Progress Bar -->
                                <div class="single-skill mb-15">
                                    <div class="bar-progress">
                                        <div id="bar1" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="95"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- / progress -->
                                <div class="prices d-flex justify-content-between">
                                    <p>Raised:<span> $20,000</span></p>
                                    <p>Goal:<span> $35,000</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cases mb-40">
                            <div class="cases-img">
                                <img src="{{ asset('public/assets/frontend/img/gallery/1623912538.12.jpeg') }} " alt="Profile">

                            </div>
                            <div class="cases-caption">
                                <h3><a href="#">Women and Youth Empowerment</a></h3>
                                <!-- Progress Bar -->
                                <div class="single-skill mb-15">
                                    <div class="bar-progress">
                                        <div id="bar2" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="50"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- / progress -->
                                <div class="prices d-flex justify-content-between">
                                    <p>Raised:<span> $20,000</span></p>
                                    <p>Goal:<span> $35,000</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cases mb-40">
                            <div class="cases-img">
                                <img src="{{ asset('public/assets/frontend/img/gallery/1623912537.13.jpeg') }} " alt="Profile">

                            </div>
                            <div class="cases-caption">
                                <h3><a href="#">Handicrafts Development</a></h3>
                                <!-- Progress Bar -->
                                <div class="single-skill mb-15">
                                    <div class="bar-progress">
                                        <div id="bar3" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="75"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- / progress -->
                                <div class="prices d-flex justify-content-between">
                                    <p>Raised:<span> $20,000</span></p>
                                    <p>Goal:<span> $35,000</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Cases End -->
        <!-- Featured_job_start -->
        <section class="featured-job-area section-padding30 section-bg2"
            data-background="public/assets/frontend/img/gallery/section_bg03.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9 col-md-10 col-sm-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>What we are boing</span>
                            <h2>We arrange many social events for handicraft fedration society</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-md-12">
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="#">
                                        <img src="{{ asset('public/assets/frontend/img/gallery/1623912545.10.jpeg') }} "
                                            alt="Profile">
                                    </a>
                                </div>
                                <div class="job-tittle">
                                    <a href="#">
                                        <h4>Child care & Protection, Child Right,<br> Education, Development is Hope</h4>
                                    </a>
                                    <ul>
                                        <li><i class="far fa-clock"></i>8:30am - 4:30pm</li>
                                        <li><i class="fas fa-sort-amount-down"></i>18.01.2021</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Bundi (RAJ)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="#">
                                        <img src="{{ asset('public/assets/frontend/img/gallery/1623912545.9.jpeg') }} "
                                            alt="Profile">
                                    </a>
                                </div>
                                <div class="job-tittle">
                                    <a href="#">
                                        <h4>A hand for Women and Youth Empowerment</h4>
                                    </a>
                                    <ul>
                                        <li><i class="far fa-clock"></i>8:30am - 4:30pm</li>
                                        <li><i class="fas fa-sort-amount-down"></i>09.08.2022</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Bundi (RAJ)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="#">
                                        <img src="{{ asset('public/assets/frontend/img/gallery/1623912538.15.jpeg') }} "
                                            alt="Profile">
                                    </a>
                                </div>
                                <div class="job-tittle">
                                    <a href="#">
                                        <h4>Help for Education</h4>
                                    </a>
                                    <ul>
                                        <li><i class="far fa-clock"></i>8:30am - 4:30pm</li>
                                        <li><i class="fas fa-sort-amount-down"></i>01.07.2023</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Bundi (RAJ)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured_job_end -->
        <!--? Team Ara Start -->
        <div class="team-area pt-50 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-70">
                            <span>What we are doing</span>
                            <h2>Our Expert Volunteer Alwyes ready</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('public/assets/frontend/img/gallery/maya-suwalka-16.jpeg') }} " alt="Profile">

                                <!-- Blog Social -->
                                <ul class="team-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-caption">
                                <h3><a href="{{ url('/') }}">Maya Suwalka</a></h3>
                                <p>President</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('public/assets/frontend/img/gallery/suresh-pareta-7.jpeg') }} " alt="Profile">

                                <!-- Blog Social -->
                                <ul class="team-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-caption">
                                <h3><a href="{{ url('/') }}">Rahul Kumar</a></h3>
                                <p>Secretary</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('public/assets/frontend/img/gallery/rajesh-talwar-6.jpeg') }} " alt="Profile">

                                <!-- Blog Social -->
                                <ul class="team-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-caption">
                                <h3><a href="{{ url('/') }}">Rajesh Kumar</a></h3>
                                <p>Treasurer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('public/assets/frontend/img/gallery/121.jpg') }} " alt="Profile">

                                <!--    Blog Social -->
                                <ul class="team-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-caption">
                                <h3><a href="{{ url('/') }}">Madhu Bala Salvi</a></h3>
                                <p>Member</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Ara End -->
        <!-- Want To work -->
        <section class="wantToWork-area ">
            <div class="container">
                <div class="wants-wrapper w-padding2  section-bg"
                    data-background="{{ asset('public/assets/frontend/img/gallery/h1_hero.jpg') }} " alt="Profile">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-9 col-md-8">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Lets Chenge The World With Humanity</h2>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4">
                            <a href="#" class="btn white-btn f-right sm-left">Become A Volunteer</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End -->
        <!--? Testimonial Start -->
        {{-- <div class="testimonial-area testimonial-padding">
            <div class="container">
                <!-- Testimonial contents -->
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10">
                        <div class="h1-testimonial-active dot-style">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder">
                                        <div class="founder-img mb-40">
                                          <img src="{{ asset('public/assets/frontend/img/gallery/testimonial.png') }} " alt="Profile">


                                            <span>Margaret Lawson</span>
                                            <p>Creative Director</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“I am at an age where I just want to be fit and healthy our bodies are our
                                            responsibility! So start caring for your body and it will care for you. Eat
                                            clean it will care for you and workout hard.”</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder">
                                        <div class="founder-img mb-40">
                                            <img src="{{ asset('public/assets/frontend/img/gallery/testimonia1.png') }} " alt="Profile">

                                            <span>Margaret Lawson</span>
                                            <p>Creative Director</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“I am at an age where I just want to be fit and healthy our bodies are our
                                            responsibility! So start caring for your body and it will care for you. Eat
                                            clean it will care for you and workout hard.”</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder">
                                        <div class="founder-img mb-40">
                                            <img src="{{ asset('public/assets/frontend/img/gallery/testimonial.png') }} "
                                                alt="Profile">

                                            <span>Margaret Lawson</span>
                                            <p>Creative Director</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“I am at an age where I just want to be fit and healthy our bodies are our
                                            responsibility! So start caring for your body and it will care for you. Eat
                                            clean it will care for you and workout hard.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Testimonial End -->
        <!--? Blog Area Start -->
        <section class="home-blog-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-9 col-sm-10">
                        <div class="section-tittle text-center mb-90">
                            <span>Our recent blog</span>
                            <h2>Latest News from our recent blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{ asset('public/assets/frontend/img/gallery/New Microsoft Office Word Document - Copy.jpg') }} " alt="Profile">

                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>Creative derector</p>
                                    <h3><a href="{{ url('/') }}">Footprints in Time is perfect House in Kurashiki</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{ asset('public/assets/frontend/img/gallery/New Microsoft Office Word Document.jpg') }} " alt="Profile">

                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>Creative derector</p>
                                    <h3><a href="{{ url('/') }}">Footprints in Time is perfect House in Kurashiki</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
        <!--? Count Down Start -->
        <div class="count-down-area pt-25 section-bg" data-background="{{ asset('public/assets/frontend/img/gallery/my1.jpeg') }} " alt="Profile">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="count-down-wrapper">
                            <div class="row justify-content-between">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <!-- Counter Up -->
                                    <div class="single-counter text-center">
                                        <span class="counter color-green">6,200</span>
                                        <span class="plus">+</span>
                                        <p class="color-green">Donation</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <!-- Counter Up -->
                                    <div class="single-counter text-center">
                                        <span class="counter color-green">80</span>
                                        <span class="plus">+</span>
                                        <p class="color-green">Fund Raised</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <!-- Counter Up -->
                                    <div class="single-counter text-center">
                                        <span class="counter color-green">256</span>
                                        <span class="plus">+</span>
                                        <p class="color-green">Donation</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <!-- Counter Up -->
                                    <div class="single-counter text-center">
                                        <span class="counter color-green">256</span>
                                        <span class="plus">+</span>
                                        <p class="color-green">Donation</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Count Down End -->
    </main>
    @endsection
