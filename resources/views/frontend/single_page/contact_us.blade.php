@extends('frontend.layouts.master')
@section('content')
 <!-- Start Banner Wrap -->
 <div id="banner-area" class="contact-banner-area" style="background: rgba(0, 0, 0, 0) no-repeat scroll center top;
">
    <div class="contact-page-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <!-- Start Banner Inner -->
                    <div class="contact-banner-inner"> 
                        <div class="contact-info-area"> 
                            <!-- Start Single Contact Item -->
                            <div class="single-contact-item"> 
                                <div class="lucian-table"> 
                                    <div class="lucian-table-cell"> 
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p>{{ get_static_option('address') }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Contact Item -->
                            <!-- Start Single Contact Item -->
                            <div class="single-contact-item"> 
                                <div class="lucian-table"> 
                                    <div class="lucian-table-cell"> 
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <h4>{{ get_static_option('mobile') }}</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Contact Item -->
                            <!-- Start Single Contact Item -->
                            <div class="single-contact-item"> 
                               <div class="lucian-table"> 
                                   <div class="lucian-table-cell"> 
                                       <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                       <p>{{ get_static_option('email') }}</p>
                                   </div>
                               </div>
                           </div>
                           <!-- End Single Contact Item -->
                           <!-- Start Single Contact Item -->
                           
                           <!-- End Single Contact Item -->
                        </div>
                    </div>
                    <!-- End Banner Inner -->
                </div>
            </div>
        </div>
    </div>
</div>


 <!-- Start Main Content -->
 <div id="main-content-area" class="padtop70 padbot65 cntnt">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Start Contact Form Content -->
                <div class="contact-form-content">
                    <!-- Start Comment Form -->
                    <div class="comment-form-area">
                        <h1 class="comment-title">Leave a message</h1>
                        <form class="ml-lg-2 pt-8 pb-10 pl-4 pr-4 pl-lg-6 pr-lg-6 grey-section" action="{{ url('contact-us')}}" method="POST">
                        @csrf
                            <div class="row comment-form-inner">
                                <div class=" col-sm-6 col-md-6">
                                    <!-- Name Field -->
                                   
                                    <input type="text" placeholder="Name" class="form-field" name="name">
                                </div>
                                <div class=" col-sm-6 col-md-6">
                                    <!-- Emial Field -->
                                    <input type="email" placeholder="Email" class="form-field" name="email">
                                </div>
                                
                                <div class="col-sm-12 col-md-12">
                                    <!-- Your Message Field -->
                                    <textarea placeholder="Your Message" class="form-field text-box" name="message_body"></textarea>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <!-- Submit Button -->
                                    <button type="submit" class="lucian-gray-btn"><span>Submit Comment</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Comment Form -->
                </div>
                <!-- End Contact Form Content -->
            </div>
        </div>
    </div>
</div>
<!-- End Main Content -->
<div id="google-ma-area">
        <div class="contact-map">
            <div id="googleMap" style="width:100%;height:575px;"></div>
        </div>
        <!-- End Map -->
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsgXqdL5ngsj3P4jOYEm-DaeuPyxy6MA"></script>
    <script>
        function initialize() {
          var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: new google.maps.LatLng(23.81033, 90.41252)
          };
          var map = new google.maps.Map(document.getElementById('googleMap'),
              mapOptions);
          var marker = new google.maps.Marker({
            position: map.getCenter(),
            animation:google.maps.Animation.BOUNCE,
            icon: 'img/contact/marker.png',
            map: map
          });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

@endsection