<section class="intro_section page_mainslider ds">
    <div class="flexslider" data-dots="false" data-nav="true">
        <ul class="slides">
  @foreach($caroussels as $caroussel)
        <li> <img src="{{Storage::disk("imageCaroussel")->url($caroussel->image)}}" alt="test">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="slide_description_wrapper">
                                <div class="slide_description">
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <h2 class="thin grey"> <strong>Discover</strong> the<br> Equestrian World </h2>
                                    </div>
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <p> A variety of horse-related activities for every member </p>
                                    </div>
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <p class="topmargin_50"> <a href="#0" class="theme_button color1">
                                    Become a club member
                                </a> </p>
                                    </div>
                                </div>
                                <!-- eof .slide_description -->
                            </div>
                            <!-- eof .slide_description_wrapper -->
                        </div>
                        <!-- eof .col-* -->
                    </div>
                    <!-- eof .row -->
                </div>
                <!-- eof .container -->
            </li>
          @endforeach  
        </ul>
    </div>
    <!-- eof flexslider -->
</section>