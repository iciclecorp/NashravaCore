 <!-- Start Slider Wrap -->
    <section id="slider-wrap">
        <!-- Start Slider Area -->
        <div class="slider-area">
            <div class="bend niceties preview-1">
                <div id="nivoslider-lucian" class="slides">	
                @foreach($slider_uppers as $slider)    
                    <img src="{{asset('public/upload/slider_image/'.$slider->image)}}" alt="" title="#slider-direction-1"  />
                @endforeach    
                   
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="slider-direction">
                    <div class="row">
                        <div class="container"> 
                            <div class="slider-content-wrap">
                                <div class="slider-content t-lft s-tb">
                                    <div class="s-tb-c">
                                        <!--<h2 class="title1">London Style</h2>
                                        <h3 class="title3 hidden-xs">Sale up to 50% off for summer days</h3>-->
                                        <div class="slider-btns"> 
                                            <a href="#" class="slider-btn">Shopping Now</a>
                                            <a href="#" class="slider-btn2">Explore</a>
                                        </div>							
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
            		
            </div>
        </div>
        <!-- End Slider Area-->
    </section>
    <!-- End Slider Wrap -->