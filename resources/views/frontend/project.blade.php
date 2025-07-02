@extends('frontend.layouts.app')

@section('content')
    <main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-20 text-center">
                            <h2>Project (HFS)</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--? Services Area Start -->
    {{-- <div class="service-area section-padding30">
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
                            <span class="flaticon-null-1"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="{{ url('/about') }}">Clean Water</a></h5>
                            <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat active text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-think"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="{{ url('/about') }}">Clean Water</a></h5>
                            <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-gear"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="{{ url('/about') }}">Clean Water</a></h5>
                            <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Services Area End -->
    <section class="about-low-area section-padding-project">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <span>Community Transformation Cycle</span>
                            <h2>Holistic Development Cycle for Community Empowerment</h2>
                        </div>
                        <p>This diagram presents a continuous cycle of initiatives aimed at the
                            comprehensive upliftment of individuals and communities. It begins
                            with Women's Development, encouraging leadership, self-reliance, and
                            active social participation through education and awareness.
                            The De-addiction Center offers rehabilitation and psychological support
                            to individuals battling substance abuse, helping them regain control of
                            their lives. Health & Awareness promotes a healthy lifestyle through
                            programs focused on physical and mental well-being, hygiene, and
                            disease prevention. Handicraft & Skill Training imparts vocational
                            skills to foster self-employment and economic independence. These four
                            interconnected pillars form a sustainable development loop where progress
                            in one area reinforces the others, leading to lasting, community-wide
                            transformation.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        {{-- <div class="about-font-img d-none d-lg-block">
                            <img src="{{ asset('public/assets/frontend/img/gallery/about4.png') }} "alt="Profile">
                        </div>
                         --}}
                        <div class="about-back-img ">
                            <img src="{{ asset('public/assets/frontend/img/gallery/Picture2.png') }} " alt="Profile">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--? About Law Start-->
<section class="about-low-area section-padding-project">
    <div class="container">
        <div class="row">
            <div class="section-tittle mb-35">
                 <h2>HFS is running Year 2022-23 Drug de-addiction centers in Jahazpur block of District Shahpura. </h2>
            </div>
            <!-- Left Image + Description -->
            <article class="col-md-6 col-sm-6 col-xs-12 filter-item ongoing-projects">
                <div class="item">
                    <img src="{{ asset('public/assets/frontend/img/gallery/1623912550.1.jpeg') }}" alt="Profile" width="100%" height="290">
                </div>
                <div class="bottom-content mt-2">
                    <a href="">
                        <h3 class="heading" style="padding: 20px 0px;">Health</h3>
                    </a>
                </div>
            </article>

            <!-- Right Image + Description -->
            <article class="col-md-6 col-sm-6 col-xs-12 filter-item ongoing-projects">
                <div class="item">
                    <img src="{{ asset('public/assets/frontend/img/gallery/1623733891.WhatsApp Image 2021-06-14 at 6.39.57 PM.jpeg') }}" alt="Profile" width="100%" height="290">
                </div>
                <div class="bottom-content mt-2">
                    <a href="">
                        <h3 class="heading" style="padding: 20px 0px;">Health</h3>
                    </a>
                </div>
            </article>
             {{-- <article class="col-md-6 col-sm-6 col-xs-12 filter-item ongoing-projects">
                <div class="item">
                    <img src="{{ asset('public/assets/frontend/img/gallery/1623912537.13.jpeg') }}" alt="Profile" width="100%" height="290">
                </div>
                <div class="bottom-content mt-2">
                    <a href="">
                        <h3 class="heading" style="padding: 20px 0px;">Old age home for senior citizens Deoli (Tonk), Jahazpur, (Bhilwara)</h3>
                    </a>
                </div>
            </article>
             <article class="col-md-6 col-sm-6 col-xs-12 filter-item ongoing-projects">
                <div class="item">
                    <img src="{{ asset('public/assets/frontend/img/gallery/1623912538.12.jpeg') }}" alt="Profile" width="100%" height="290">
                </div>
                <div class="bottom-content mt-2">
                    <a href="">
                        <h3 class="heading" style="padding: 20px 0px;">Old age home for senior citizens Deoli (Tonk), Jahazpur, (Bhilwara)</h3>
                    </a>
                </div>
            </article>
             <article class="col-md-6 col-sm-6 col-xs-12 filter-item ongoing-projects">
                <div class="item">
                    <img src="{{ asset('public/assets/frontend/img/gallery/1623733912.WhatsApp Image 2021-06-14 at 9.03.29 PM_1).jpeg') }}" alt="Profile" width="100%" height="290">
                </div>
                <div class="bottom-content mt-2">
                    <a href="">
                        <h3 class="heading" style="padding: 20px 0px;">Old age home for senior citizens Deoli (Tonk), Jahazpur, (Bhilwara)</h3>
                    </a>
                </div>
            </article>
             <article class="col-md-6 col-sm-6 col-xs-12 filter-item ongoing-projects">
                <div class="item">
                    <img src="{{ asset('public/assets/frontend/img/gallery/1623733889.WhatsApp Image 2021-06-14 at 6.27.44 PM.jpeg') }}" alt="Profile" width="100%" height="290">
                </div>
                <div class="bottom-content mt-2">
                    <a href="">
                        <h3 class="heading" style="padding: 20px 0px;">Old age home for senior citizens Deoli (Tonk), Jahazpur, (Bhilwara)</h3>
                    </a>
                </div>
            </article>
             <article class="col-md-6 col-sm-6 col-xs-12 filter-item ongoing-projects">
                <div class="item">
                    <img src="{{ asset('public/assets/frontend/img/gallery/1623733902.WhatsApp Image 2021-06-14 at 9.03.30 PM_2).jpeg') }}" alt="Profile" width="100%" height="290">
                </div>
                <div class="bottom-content mt-2">
                    <a href="">
                        <h3 class="heading" style="padding: 20px 0px;">Old age home for senior citizens Deoli (Tonk), Jahazpur, (Bhilwara)</h3>
                    </a>
                </div>
            </article>
             <article class="col-md-6 col-sm-6 col-xs-12 filter-item ongoing-projects">
                <div class="item">
                    <img src="{{ asset('public/assets/frontend/img/gallery/1623733902.WhatsApp Image 2021-06-14 at 8.32.57 PM.jpeg') }}" alt="Profile" width="100%" height="290">
                </div>
                <div class="bottom-content mt-2">
                    <a href="">
                        <h3 class="heading" style="padding: 20px 0px;">Old age home for senior citizens Deoli (Tonk), Jahazpur, (Bhilwara)</h3>
                    </a>
                </div>
            </article>
             <article class="col-md-6 col-sm-6 col-xs-12 filter-item ongoing-projects">
                <div class="item">
                    <img src="{{ asset('public/assets/frontend/img/gallery/1623733901.WhatsApp Image 2021-06-14 at 8.32.56 PM.jpeg') }}" alt="Profile" width="100%" height="290">
                </div>
                <div class="bottom-content mt-2">
                    <a href="">
                        <h3 class="heading" style="padding: 20px 0px;">Old age home for senior citizens Deoli (Tonk), Jahazpur, (Bhilwara)</h3>
                    </a>
                </div>
            </article>
             <article class="col-md-6 col-sm-6 col-xs-12 filter-item ongoing-projects">
                <div class="item">
                    <img src="{{ asset('public/assets/frontend/img/gallery/1623733900.WhatsApp Image 2021-06-14 at 9.03.30 PM.jpeg') }}" alt="Profile" width="100%" height="290">
                </div>
                <div class="bottom-content mt-2" >
                    <a href="">
                        <h3 class="heading" style="padding: 20px 0px;">Old age home for senior citizens Deoli (Tonk), Jahazpur, (Bhilwara)</h3>
                    </a>
                </div>
            </article> --}}
        </div>
    </div>
</section>


    <!-- About Law End-->
    <!-- Want To work -->
    {{-- <section class="wantToWork-area ">
        <div class="container">
            <div class="wants-wrapper w-padding2  section-bg" data-background="{{ asset('public/assets/frontend/img/gallery/h1_hero.jpg') }} " alt="Profile">
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
    </section> --}}
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
                                    <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                </div>
                            </div>
                        </div>
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
                                    <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                </div>
                            </div>
                        </div>
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
                                    <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->

    <!--? Count Down Start -->
    <div class="count-down-area pt-25 section-bg" data-background="{{ asset('public/assets/frontend/img/gallery/my1.jpeg') }} " alt="Profile">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="count-down-wrapper" >
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
