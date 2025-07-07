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
                            <h2>Health (HFS)</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Services Area End -->
    <section class="about-low-area section-padding-project-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            {{-- <span>Health</span> --}}
                            <h2>Handicraft Artisan Development Programme</h2>
                        </div>
                        <p>HFS set up a Lac Craft Training Programme Artisans in
                            District Bundi for a period of 12 years. This is an
                            On-going programme, running since 2012-13, soon after
                             the completion of BLS of 300 artisans. They have imparted
                              all necessary and relevant information on the scheme.
                              All artisans of Lac Craft belongto Minority section.<br>
                              Women empowerment is one of core strategies, which cut across
                            all the programmes and activities. The approach for implementation
                            focused on bringing the women together in formal/informal groups
                            and mobilizing them for their own empowerment and development. This
                            is achieved through organizing them by promotion of savings and credit
                            groups, building their capacity, and creating additional employed
                            opportunities through income generation activities.
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
                            <img src="{{ asset('public/assets/frontend/img/gallery/Handicraft1.png') }} " alt="Profile">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="service-area section-padding30">
        <div class="container">
            <!-- Table Section Starts -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-10">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>S.No.</th>
                                    <th>Name of Center</th>
                                    <th>Year</th>
                                    <th>Total Patient</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>I.</td>
                                    <td>HFS Dedication Center, Jahazpur (Shahpura)</td>
                                    <td>2022-23</td>
                                    <td>40</td>
                                </tr>
                                <tr>
                                    <td>II.</td>
                                    <td>HFS Dedication Center, Jahazpur (Shahpura)</td>
                                    <td>2023-24</td>
                                    <td>55</td>
                                </tr>
                                <tr>
                                    <td>III.</td>
                                    <td>HFS Dedication Center, Jahazpur (Shahpura)</td>
                                    <td>2024-25</td>
                                    <td>80</td>
                                </tr>
                                <tr>
                                    <td>IV.</td>
                                    <td>HFS Dedication Center, Ajmer (Raj.)</td>
                                    <td>2025-26</td>
                                    <td>Running</td>
                                </tr>
                                <tr>
                                    <td>V.</td>
                                    <td>HFS Dedication Center, Beawar (Raj.)</td>
                                    <td>2025-26</td>
                                    <td>Running</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table Section Ends -->
    </div>

    {{-- <section class="about-low-area section-padding-project-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-10">
                    <div class="about-caption mb-50">
                        <!-- Section Title -->
                        <div class="section-tittle mb-35">
                            <h2>Core Programme</h2>
                        </div>
                        <ul class="core-programme-list">
                            <li>1. Child care & Protection, Child Right, Education, Development</li>
                            <li>2. Health</li>
                            <li>3. Women and Youth Empowerment</li>
                            <li>4. Handicrafts Development</li>
                            <li>5. Education</li>
                            <li>6. Water Resource Management</li>
                            <li>7. Prevention of begging</li>
                            <li>8. Child Labor & Child Marriage</li>
                            <li>9. De-addiction</li>
                            <li>10. Disabled Person Development Programme</li>
                            <li>11. Skill & Vocational Training</li>
                            <li>12. Senior Citizens Care & Protection, Development</li>
                            <li>13. Awareness Camp & Medical Camp</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

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
