@extends('Front.index')
@section('title', 'e-commerceQ')
@section('main')
<!-- Hero Section -->
<section class="hero-section container">

    <div class="row">

        <div class="col-md-6 content-hero d-flex align-items-center">

            <div>
                <span>LEARN FROM EXPERTS</span>

                <h2 class="hero-title">Start Your <span>Developer <br>
                        Journey</span> Today</h2>

                <p class="desc">Our bootcamp is helping junior developers who <br>
                    are really passionate in the programming.</p>

                <a href="#" class="btn btn-get-started">Get Started</a>
            </div>

        </div>

        <div class="col-md-6 hero-image">
            <img class="img-fluid" src="{{ asset('landing/images/banner.png') }}" alt="Banner">
        </div>

    </div>

</section>
<!-- End Hero Section -->


<!-- Support -->
<section class="support container text-center">
    <img src="{{ asset('landing/images/support.png') }}" alt="Support" class="img-fluid">
</section>
<!-- End Support -->


<!-- Benefits -->
<section class="benefits container">

    <div class="title-benefits text-center">
        <span>OUR SUPER BENEFITS</span>
        <p class="sub-title">Learn Faster & Better</p>
    </div>

    <div class="varian-benefits">
        <div class="row">

            <div class="col-md-3 varian">
                <img src="{{ asset('landing/images/icons/ic_globe-1.png') }}" alt="Diversity"> <br>
                <span>Diversity</span>
                <p class="varian-content">Learn from anyone around the world and get a new skills</p>
            </div>

            <div class="col-md-3 varian">
                <img src="{{ asset('landing/images/icons/ic_globe-2.png') }}" alt="Diversity"> <br>
                <span>A.I Guideline</span>
                <p class="varian-content">Lara will help you to choose which path that suitable for you</p>
            </div>

            <div class="col-md-3 varian">
                <img src="{{ asset('landing/images/icons/ic_globe-3.png') }}" alt="Diversity"> <br>
                <span>1-1 Mentoring</span>
                <p class="varian-content">We will ensure that you will get what you really do need</p>
            </div>

            <div class="col-md-3 varian">
                <img src="{{ asset('landing/images/icons/ic_globe-4.png') }}" alt="Diversity"> <br>
                <span>Future Job</span>
                <p class="varian-content">Get your dream job in your dream company together with us</p>
            </div>

        </div>
    </div>

</section>
<!-- End Benefits -->


<!-- Section Career -->
<section class="career container">

    <div class="row">

        <div class="col-md-6 img-career d-flex justify-content-end">
            <img src="{{ asset('landing/images/career-1.png') }}" alt="Career 1" class="img-fluid">
        </div>

        <div class="col-md-6 content-career d-flex align-items-center">
            <div class="desc-career">
                <span>BETTER CAREER</span>
                <h3 class="title">Prepare The Journey</h3>
                <p class="desc">We do really care to our students' future career <br>
                    so it would be good if you are taking a quick interview</p>
                <a href="#" class="btn btn-career">Learn More</a>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-md-6 content-career justify-content-center d-flex align-items-center">
            <div class="desc-career">
                <span>STUDY HARDER</span>
                <h3 class="title">Finish The Project</h3>
                <p class="desc">Each of you will be joining the private group and also <br>
                    working together with team members on project</p>
                <a href="#" class="btn btn-career">View Demo</a>
            </div>
        </div>

        <div class="col-md-6 img-career d-flex justify-content-end">
            <img src="{{ asset('landing/images/career-2.png') }}" alt="Career 2" class="img-fluid">
        </div>

    </div>

    <div class="row">

        <div class="col-md-6 img-career d-flex justify-content-end">
            <img src="{{ asset('landing/images/career-3.png') }}" alt="Career 3" class="img-fluid">
        </div>

        <div class="col-md-6 content-career d-flex align-items-center">
            <div class="desc-career">
                <span>END GAME</span>
                <h3 class="title">Big Demo Day</h3>
                <p class="desc">Learn how to speaking in public to demonstrate your <br>
                    final project and receive the important feedbacks</p>
                <a href="#" class="btn btn-career">Showcase</a>
            </div>
        </div>

    </div>

</section>
<!-- End Section Career -->


<!-- Section Investment -->
<section class="investment">

    <div class="container">

        <div class="row">

            <div class="col-md-4 invest-content">
                <div class="desc-content">
                    <span>GOOD INVESTMENT</span>
                    <h3 class="title">Start Your Journey</h3>
                    <p class="desc">We do have a couple of plans that might fit for you.
                        Kindly download our full syallbus below.</p>
                    <a href="#" class="btn btn-silabus">View Syllabus</a>
                </div>
            </div>

            <div class="col-md-4 kartu">
                <div class="card" style="width: 310px;">
                    <div class="card-body">
                        <div class="text-center">
                            <span>GILA BELAJAR</span>
                        </div>
                        <h5 class="card-title">$280K</h5>

                        <div class="list-data">
                            <img class="list-img" src="{{ asset('landing/images/ic_check.svg') }}" alt="Icon Check">
                            <p>Pro Techstack Kit</p>
                        </div>
                        <hr>

                        <div class="list-data">
                            <img class="list-img" src="{{ asset('landing/images/ic_check.svg') }}" alt="Icon Check">
                            <p>iMac Pro 2021 & Display</p>
                        </div>
                        <hr>

                        <div class="list-data">
                            <img class="list-img" src="{{ asset('landing/images/ic_check.svg') }}" alt="Icon Check">
                            <p>1-1 Mentoring Program</p>
                        </div>
                        <hr>

                        <div class="list-data">
                            <img class="list-img" src="{{ asset('landing/images/ic_check.svg') }}" alt="Icon Check">
                            <p>Final Project Certificate</p>
                        </div>
                        <hr>

                        <div class="list-data">
                            <img class="list-img" src="{{ asset('landing/images/ic_check.svg') }}" alt="Icon Check">
                            <p>Offline Course Videos</p>
                        </div>
                        <hr>

                        <div class="list-data">
                            <img class="list-img" src="{{ asset('landing/images/ic_check.svg') }}" alt="Icon Check">
                            <p>Future Job Opportinity</p>
                        </div>
                        <hr>

                        <div class="list-data">
                            <img class="list-img" src="{{ asset('landing/images/ic_check.svg') }}" alt="Icon Check">
                            <p>Premium Design Kit</p>
                        </div>
                        <hr>

                        <div class="list-data">
                            <img class="list-img" src="{{ asset('landing/images/ic_check.svg') }}" alt="Icon Check">
                            <p>Website Builder</p>
                        </div>

                        <a href="#" class="btn btn-primary">Take This Plan</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 kartu">
                <div class="card" style="width: 310px;">
                    <div class="card-body">
                        <div class="text-center">
                            <span>BARU MULAI</span>
                        </div>
                        <h5 class="card-title">$140K</h5>

                        <div class="list-data">
                            <img class="list-img" src="{{ asset('landing/images/ic_check.svg') }}" alt="Icon Check">
                            <p>1-1 Mentoring Program</p>
                        </div>
                        <hr>

                        <div class="list-data">
                            <img class="list-img" src="{{ asset('landing/images/ic_check.svg') }}" alt="Icon Check">
                            <p>Final Project Certificate</p>
                        </div>
                        <hr>

                        <div class="list-data">
                            <img class="list-img" src="{{ asset('landing/images/ic_check.svg') }}" alt="Icon Check">
                            <p>Offline Course Videos</p>
                        </div>
                        <hr>

                        <div class="list-data">
                            <img class="list-img" src="{{ asset('landing/images/ic_check.svg') }}" alt="Icon Check">
                            <p>Future Job Opportinity</p>
                        </div>

                        <a href="#" class="btn btn-secondary">Start With This Plan</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>
<!-- End Section Investment -->


<!-- Support -->
<section class="support2 container text-center">
    <img src="{{ asset('landing/images/support.png') }}" alt="Support" class="img-fluid">
</section>
<!-- End Support -->

<section class="footer-section">
    <div class="container text-center header-footer">
        <span>SUCCESS STUDENTS</span>
        <h3>We Really Love Laracamp</h3>
    </div>
    <div class="container students">
        <div class="row">
            <div class="col-md-4 kartu d-flex justify-content-end">
                <div class="card" style="width: 287px;">
                    <div class="card-body">
                        <img class="rate img-fluid" src="{{ asset('landing/images/rate.svg') }}" alt="Rate">
                        <p class="card-text">
                            I was not really into code but
                            after they teach me how to
                            train my logic then I was really
                            fall in love with code</p>
                        <div class="user-students">
                            <img class="user-img img-fluid" src="{{ asset('landing/images/user-1.png') }}" alt="User">
                            <div class="nama">
                                <span>Fanny</span>
                                <p class="profesi">Developer at Google</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 kartu d-flex justify-content-center">
                <div class="card" style="width: 287px;">
                    <div class="card-body">
                        <img class="rate img-fluid" src="{{ asset('landing/images/rate.svg') }}" alt="Rate">
                        <p class="card-text">
                            I was not really into code but
                            after they teach me how to
                            train my logic then I was really
                            fall in love with code</p>
                        <div class="user-students">
                            <img class="user-img img-fluid" src="{{ asset('landing/images/user-2.png') }}" alt="User">
                            <div class="nama">
                                <span>Fanny</span>
                                <p class="profesi">Developer at Google</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 kartu">
                <div class="card" style="width: 287px;">
                    <div class="card-body">
                        <img class="rate img-fluid" src="{{ asset('landing/images/rate.svg') }}" alt="Rate">
                        <p class="card-text">
                            I was not really into code but
                            after they teach me how to
                            train my logic then I was really
                            fall in love with code</p>
                        <div class="user-students">
                            <img class="user-img img-fluid" src="{{ asset('landing/images/user-3.png') }}" alt="User">
                            <div class="nama">
                                <span>Fanny</span>
                                <p class="profesi">Developer at Google</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center copy">
        All Rights Reserved. Copyright Jaylaa Indonesia.
    </p>
</section>
@endsection
