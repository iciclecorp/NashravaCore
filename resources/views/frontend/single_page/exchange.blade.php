@extends('frontend.layouts.master')
@section('content')
    <!-- Start Breadcrumb -->
    <div id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <a href="{{url('/')}}">Home</a> <span class="separator">&gt;</span> <span>About Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <!-- Start Banner -->
    <div id="banner-area" class="gradient-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-inner blog-banner">
                        <a class="btn-lucian" href="#">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <!-- Start Main Content -->
    <div id="main-content-area" class="padtop80 padbot60">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-10">
                    <!-- Start Single Bloag Post -->
                    <article id="post" class="single-post-content">
                        <!-- Start Thumbnail Image -->
                        <div class="blog-post-thumb">
                            <a href="#"><img class="img-responsive" src="img/blog/8.jpg" alt="" />
                            </a>
                            <div class="post-date"><span>28</span> dec</div>
                        </div>
                        <!-- End Thumbnail Image-->
                        <!-- Entry Header -->
                        <header class="entry-header">
                            <h2 class="entry-title">About Us </h2>
                            <!-- Start Meta -->
                            <div class="entry-meta">
                                <!--<p>/ Posted by <a href="#">Mekirin-design</a> / Man Fashion</p>-->
                            </div>
                            <!-- End Meta -->
                        </header>
                        <!-- End Entry Header -->
                        <!-- Start Entry Content -->
                        <div class="entry-content">
                            <p>
                            NashraVa as a  fashion retailer, inspires authentic self expression through offering brands with variety of product lines. This helps our customers to flaunt their personal style in day to day life.</p><p>
                                 Our designs are unique and styles are always updating depending on trends and seasons.</p><p>
                                     Product lines include wide range of contemporary ready to wear fashion which enables an easy access to global fashion for customers at a great value.</p><p>

NashraVa aspires to doing more than selling cloths proudly.</p><p> We are passionately committed to deliver our customers fashion, quality and comfort with most convenient shopping experience by consistently developing it everyday.

</p>
                        </div>
                        <!-- End Entry Content -->
                       
                    </article>
                    <!-- End Single Bloag Post -->
                   
                    <!-- Start Comment Form -->
                    
                    <!-- End Comment Form -->
                </div>
                <div class="hidden-xs col-sm-2 col-md-2">
                    <!-- Start Social Shares -->
                   <!-- <div class="social-shares">
                        <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href="#" class="vimeo"><i class="fa fa-vimeo-square" aria-hidden="true"></i></a>
                        <a href="#" class="pinterest"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>-->
                    <!-- End Social Shares -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
    <!-- Start Brand Logos Area -->
   
    <!-- End Brand Logos Area -->
   @endsection