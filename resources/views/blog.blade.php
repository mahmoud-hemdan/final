@extends('layouts.app')

@section('content')
    <!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-rs-food">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('homepage') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('menu') }}">Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a"
                                data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="{{ route('reservation') }}">Reservation</a>
                                <a class="dropdown-item" href="{{ route('stuff') }}">Stuff</a>
                                <a class="dropdown-item" href="{{ route('gallery') }}">Gallery</a>
                            </div>
                        </li>
                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a"
                                data-toggle="dropdown">Blog</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="{{ route('blog') }}">blog</a>
                                <a class="dropdown-item" href="{{ route('blogdetails') }}">blog Single</a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                        @include('temp.authentication')
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Blog</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start blog -->
    <div class="blog-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Blog</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-box-inner">
                        <div class="blog-img-box">
                            <img class="img-fluid" src="images/blog-img-01.jpg" alt="">
                        </div>
                        <div class="blog-detail">
                            <h4>Duis feugiat neque sed dolor cursus.</h4>
                            <ul>
                                <li><span>Post by Admin</span></li>
                                <li>|</li>
                                <li><span>27 February 2018</span></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit
                                feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend
                                luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                            <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. </p>
                            <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-box-inner">
                        <div class="blog-img-box">
                            <img class="img-fluid" src="images/blog-img-02.jpg" alt="">
                        </div>
                        <div class="blog-detail">
                            <h4>Duis feugiat neque sed dolor cursus.</h4>
                            <ul>
                                <li><span>Post by Admin</span></li>
                                <li>|</li>
                                <li><span>27 February 2018</span></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit
                                feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend
                                luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                            <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. </p>
                            <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-box-inner">
                        <div class="blog-img-box">
                            <img class="img-fluid" src="images/blog-img-03.jpg" alt="">
                        </div>
                        <div class="blog-detail">
                            <h4>Duis feugiat neque sed dolor cursus.</h4>
                            <ul>
                                <li><span>Post by Admin</span></li>
                                <li>|</li>
                                <li><span>27 February 2018</span></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit
                                feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend
                                luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                            <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. </p>
                            <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-box-inner">
                        <div class="blog-img-box">
                            <img class="img-fluid" src="images/blog-img-04.jpg" alt="">
                        </div>
                        <div class="blog-detail">
                            <h4>Duis feugiat neque sed dolor cursus.</h4>
                            <ul>
                                <li><span>Post by Admin</span></li>
                                <li>|</li>
                                <li><span>27 February 2018</span></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit
                                feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend
                                luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                            <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. </p>
                            <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-box-inner">
                        <div class="blog-img-box">
                            <img class="img-fluid" src="images/blog-img-05.jpg" alt="">
                        </div>
                        <div class="blog-detail">
                            <h4>Duis feugiat neque sed dolor cursus.</h4>
                            <ul>
                                <li><span>Post by Admin</span></li>
                                <li>|</li>
                                <li><span>27 February 2018</span></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit
                                feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend
                                luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                            <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. </p>
                            <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-box-inner">
                        <div class="blog-img-box">
                            <img class="img-fluid" src="images/blog-img-06.jpg" alt="">
                        </div>
                        <div class="blog-detail">
                            <h4>Duis feugiat neque sed dolor cursus.</h4>
                            <ul>
                                <li><span>Post by Admin</span></li>
                                <li>|</li>
                                <li><span>27 February 2018</span></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit
                                feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend
                                luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                            <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. </p>
                            <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-box-inner">
                        <div class="blog-img-box">
                            <img class="img-fluid" src="images/blog-img-07.jpg" alt="">
                        </div>
                        <div class="blog-detail">
                            <h4>Duis feugiat neque sed dolor cursus.</h4>
                            <ul>
                                <li><span>Post by Admin</span></li>
                                <li>|</li>
                                <li><span>27 February 2018</span></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit
                                feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend
                                luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                            <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. </p>
                            <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-box-inner">
                        <div class="blog-img-box">
                            <img class="img-fluid" src="images/blog-img-08.jpg" alt="">
                        </div>
                        <div class="blog-detail">
                            <h4>Duis feugiat neque sed dolor cursus.</h4>
                            <ul>
                                <li><span>Post by Admin</span></li>
                                <li>|</li>
                                <li><span>27 February 2018</span></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit
                                feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend
                                luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                            <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. </p>
                            <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-box-inner">
                        <div class="blog-img-box">
                            <img class="img-fluid" src="images/blog-img-09.jpg" alt="">
                        </div>
                        <div class="blog-detail">
                            <h4>Duis feugiat neque sed dolor cursus.</h4>
                            <ul>
                                <li><span>Post by Admin</span></li>
                                <li>|</li>
                                <li><span>27 February 2018</span></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit
                                feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend
                                luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                            <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. </p>
                            <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End blog -->

    <!-- Start Contact info -->
    <div class="contact-imfo-box">
        <div class="container">
            <div class="row">
                <div class="col-md-4 arrow-right">
                    <i class="fa fa-volume-control-phone"></i>
                    <div class="overflow-hidden">
                        <h4>Phone</h4>
                        <p class="lead">
                            +01 123-456-4590
                        </p>
                    </div>
                </div>
                <div class="col-md-4 arrow-right">
                    <i class="fa fa-envelope"></i>
                    <div class="overflow-hidden">
                        <h4>Email</h4>
                        <p class="lead">
                            yourmail@gmail.com
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-map-marker"></i>
                    <div class="overflow-hidden">
                        <h4>Location</h4>
                        <p class="lead">
                            800, Lorem Street, US
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact info -->

    <!-- Start Footer -->
    <footer class="footer-area bg-f">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3>About Us</h3>
                    <p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac, semper magna.
                        Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui.</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Subscribe</h3>
                    <div class="subscribe_form">
                        <form class="subscribe_form">
                            <input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..."
                                type="email">
                            <button type="submit" class="submit">SUBSCRIBE</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                    <ul class="list-inline f-social">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"
                                    aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"
                                    aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"
                                    aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Contact information</h3>
                    <p class="lead">Ipsum Street, Lorem Tower, MO, Columbia, 508000</p>
                    <p class="lead"><a href="#">+01 2000 800 9999</a></p>
                    <p><a href="#"> info@admin.com</a></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Opening hours</h3>
                    <p><span class="text-color">Monday: </span>Closed</p>
                    <p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
                    <p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
                    <p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="company-name">All Rights Reserved. &copy; 2018 <a href="#">Live Dinner
                                Restaurant</a> Design By :
                            <a href="https://html.design/">html design</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o"
            aria-hidden="true"></i></a>
@endsection
