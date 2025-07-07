@extends('frontend.layouts.app')

@section('content')
    <!-- ? Preloader Start -->

    <!-- Preloader Start -->

    <!-- header end -->
    <main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-20 text-center">
                            <h2>About US (HFS)</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
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
    <section class="about-low-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <span>About our foundetion</span>
                            <h2>About Handicraft Fedration Society (HFS) Bundi</h2>
                        </div>
                        <p>Handicraft Fedration Society (HFS) is non-profit voluntary organization
                             working for the Social development - rehabilitation - protection and
                             empowerment of women, children and deprive class of society.  child education,
                              women & child health, women empowerment, youth upliftment, microfinance, Health,
                               Handicraft Artisan Devlopment, Skill and vocanation training programme, de addction
                               center, natural resource management and urbanization & Rural DevlopmentThe organization
                               founded in the year 2012 by a group of devoted and committed social activists to promote
                                change in society.Itis a non-political voluntary organization registered under the
                                 Societies Registration Act, 1958. Its registration no. is 31/Bundi/2012-13.</p>
                        <p>HFS is working on Development Issues by covering Millennium Development Goals (MDGs)
                            through its Some district branch-offices of Rajasthan State i.e.  Bundi, Tonk, Kota,
                            Shahpura, Bhilwara, Ajmer, Beawar .It’s headquarter is situated at Bundi, district Bundi,
                             Rajasthan & Branch Office Mamta Circle, Mal Mohalla, Deoli Distt. Tonk Raj.Time to time
                             HFS Organazation is organizing Handicraft Artisan Devlopment, vocational training workshops
                              for the women's group members for there economically empowerment and to make them independent
                               and provide income generation opportunities through several trainings to targeted children
                               and their mothers.</p>
                    </div>
                    {{-- <a href="{{ url('/about') }}" class="btn">About US</a> --}}
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        {{-- <div class="about-font-img d-none d-lg-block">
                            <img src="{{ asset('public/assets/frontend/img/gallery/about4.png') }} "alt="Profile">
                        </div> --}}
                        <div class="about-back-img ">
                            <img src="{{ asset('public/assets/frontend/img/gallery/aboyt-page.jpg') }} " alt="Profile">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Law End-->
    <!-- Want To work -->
    <section class="wantToWork-area ">
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
