@extends("front.app")
    @section("content") 
    
        {{-- @include("front.home.partials.search-modal")
        @include("front.home.partials.unysson") --}}
  
        @include("front.home.partials.slider")
        @include("front.home.partials.mission")
        @include("front.home.partials.activite") 
        @include("front.home.partials.news")  
    {{--     @include("front.home.partials.intro-section")
        @include("front.home.partials.about") --}}   
    @endsection

           
                
               {{-- 
                <section id="pricing" class="ls ms texture_bg section_padding_top_150 section_padding_bottom_150 columns_padding_25 columns_margin_bottom_20">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2 class="section_header">Our Pricing</h2>
                                <p>Our experienced staff and horses can cater for riders ranging from beginners to advanced, and for those who want to specialize in show jumping or dressage.</p>
                            </div>
                        </div>
                        <div class="row price-row display_table_md">
                            <div class="col-md-4 col-sm-6 display_table_cell_md">
                                <ul class="price-table style1 with_background rounded">
                                    <li class="plan-name">
                                        <h4>Private</h4>
                                    </li>
                                    <li class="plan-price highlight"> <span class="grey">$</span>79<span>.99</span>
                                        <div class="price-description grey">per hour</div>
                                    </li>
                                    <li class="features-list">
                                        <ul>
                                            <li>One-on-one Tuition</li>
                                            <li>Semi–private Lessons</li>
                                            <li>Available at Any Level</li>
                                            <li>A Wide Range of Times</li>
                                        </ul>
                                    </li>
                                    <li class="call-to-action"> <a href="#" class="theme_button color1 block_button">Book now</a> </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-6 display_table_cell_md col-md-push-4">
                                <ul class="price-table style1 with_background rounded">
                                    <li class="plan-name">
                                        <h4>Intermediate</h4>
                                    </li>
                                    <li class="plan-price highlight2"> <span class="grey">$</span>59<span>.99</span>
                                        <div class="price-description grey">per hour</div>
                                    </li>
                                    <li class="features-list">
                                        <ul>
                                            <li>Group Lessons (max 8 riders)</li>
                                            <li>Walking and Trotting</li>
                                            <li>Jumping Lessons</li>
                                            <li>Other Tutorials</li>
                                        </ul>
                                    </li>
                                    <li class="call-to-action"> <a href="#" class="theme_button color2 block_button">Book now</a> </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-6 display_table_cell_md col-md-pull-4 col-sm-offset-3 col-md-offset-0">
                                <ul class="price-table style1 with_background with_shadow rounded">
                                    <li class="plan-name">
                                        <h4>Beginner</h4>
                                    </li>
                                    <li class="plan-price highlight3"> <span class="grey">$</span>29<span>.99</span>
                                        <div class="price-description grey">per hour</div>
                                    </li>
                                    <li class="features-list">
                                        <ul>
                                            <li>Mini Groups on Weekdays</li>
                                            <li>Small Groups (max 7 riders)</li>
                                            <li>Perfect for New Riders</li>
                                            <li>Lead rein</li>
                                            <li>Off-lead rein</li>
                                        </ul>
                                    </li>
                                    <li class="call-to-action"> <a href="#" class="theme_button color3 block_button">Book now</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="appointment" class="ds page_appointment parallax section_padding_top_150 section_padding_bottom_150">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center to_animate animated fadeInUp" data-animation="fadeInUp">
                                <h2 class="section_header">Appointment</h2>
                                <form class="contact-form row columns_margin_bottom_20" method="post" action="./">
                                    <div class="col-md-4">
                                        <div class="form-group margin_0"> <label for="appointment-name">Full Name <span class="required">*</span></label> <i class="rt-icon2-user highlight"></i> <input type="text" aria-required="true" size="30" value="" name="name" id="appointment-name" class="form-control" placeholder="Full Name">										</div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group margin_0"> <label for="appointment-phone">Phone Number <span class="required">*</span></label> <i class="rt-icon2-phone5 highlight"></i> <input type="text" aria-required="true" size="30" value="" name="appointment-phone" id="appointment-phone" class="form-control"
                                                placeholder="Phone Number"> </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="select-group"> <label for="appointment-date">Date <span class="required">*</span></label> <i class="rt-icon2-calendar4 highlight"></i> <select aria-required="true" id="appointment-date" name="appointment-date" class="choice empty form-control">
                                    <option value="" disabled="" selected="" data-default="">Date</option>
                                    <option value="1306">13.06</option>
                                    <option value="1406">14.06</option>
                                    <option value="1506">15.06</option>
                                    <option value="1606">16.06</option>
                                    <option value="1706">17.06</option>
                                    <option value="1806">18.06</option>
                                    <option value="1906">19.06</option>
                                    <option value="2006">20.06</option>
                                </select> <i class="fa fa-angle-down theme_button" aria-hidden="true"></i> </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="select-group"> <label for="appointment-time">Time <span class="required">*</span></label> <i class="rt-icon2-clock highlight"></i> <select aria-required="true" id="appointment-time" name="appointment-time" class="choice empty form-control">
                                    <option value="" disabled="" selected="" data-default="">Time</option>
                                    <option value="08am">8:00 AM</option>
                                    <option value="09am">9:00 AM</option>
                                    <option value="10am">10:00 AM</option>
                                    <option value="11am">11:00 AM</option>
                                    <option value="12am">12:00 PM</option>
                                    <option value="13pm">13:00 PM</option>
                                    <option value="14pm">14:00 PM</option>
                                    <option value="15pm">15:00 PM</option>
                                    <option value="16pm">16:00 PM</option>
                                    <option value="17pm">17:00 PM</option>
                                </select> <i class="fa fa-angle-down theme_button" aria-hidden="true"></i> </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group margin_0"> <label for="appointment-message">Message</label> <i class="rt-icon2-pen highlight"></i> <textarea aria-required="true" rows="3" cols="45" name="appointment-message" id="appointment-message" class="form-control" placeholder="Message"></textarea>										</div>
                                    </div>
                                    <div class="col-sm-12 bottommargin_0">
                                        <div class="contact-form-submit topmargin_30"> <button type="submit" id="appointment-_submit" name="contact_submit" class="theme_button color2 min_width_button">Book now</button> </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section id="testimonials" class="ls section_padding_100">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="owl-carousel" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-nav="ture" data-dots="false">
                                    <blockquote class="text-center"> <img src="images/faces/01.jpg" alt=""> I’ve been bringing my daughter to your riding school for the last 3 years. It is a fantastic place to ride whether you’re starting for the first time or have some experience. It’s the best place for any horse
                                        rider.
                                        <div class="item-meta">
                                            <h5 class="highlight2">William B. Dean</h5> Client </div>
                                    </blockquote>
                                    <blockquote class="text-center"> <img src="images/faces/02.jpg" alt=""> Truly exceptional experience. I am fortunate to have had 15 years experience of riding my own horses. I could immediately see the way the horses were handled and the set up at the stables of this horse club.
                                        <div class="item-meta">
                                            <h5 class="highlight2">Jacqueline J. Banda</h5> Client </div>
                                    </blockquote>
                                    <blockquote class="text-center"> <img src="images/faces/03.jpg" alt=""> Thank you for looking after us all so beautifully, we had a wonderful evening and the children both want to return for another ride and to play with your horses. Hopefully we will be back next month.
                                        <div
                                            class="item-meta">
                                            <h5 class="highlight2">Garland L. Kucharski</h5> Client </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
            <section class="ls page_map" data-address="78-49 Newman St Fitzrovia, London">
                <!-- marker description and marker icon goes here -->
                <div class="map_marker_description">
                    <h3>Map Title</h3>
                    <p>Map description text</p> <img class="map_marker_icon" src="images/map_marker_icon.png" alt=""> </div>
            </section>
            <section id="gallery" class="ls">
                <div class="owl-carousel gallery-carousel" data-responsive-xlg="8" data-responsive-lg="8" data-responsive-md="5" data-responsive-sm="3" data-responsive-xs="2" data-loop="true" data-margin="0" data-nav="true">
                    <div class="vertical-item content-absolute corporate consulting">
                        <div class="item-media"> <img src="images/events/01.jpg" alt="">
                            <div class="media-links color-overlay"> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/01.jpg"></a> </div>
                        </div>
                    </div>
                    <div class="vertical-item content-absolute corporate consulting">
                        <div class="item-media"> <img src="images/events/02.jpg" alt="">
                            <div class="media-links color-overlay"> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/02.jpg"></a> </div>
                        </div>
                    </div>
                    <div class="vertical-item content-absolute corporate consulting">
                        <div class="item-media"> <img src="images/events/03.jpg" alt="">
                            <div class="media-links color-overlay"> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/03.jpg"></a> </div>
                        </div>
                    </div>
                    <div class="vertical-item content-absolute corporate consulting">
                        <div class="item-media"> <img src="images/events/04.jpg" alt="">
                            <div class="media-links color-overlay"> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/04.jpg"></a> </div>
                        </div>
                    </div>
                    <div class="vertical-item content-absolute corporate consulting">
                        <div class="item-media"> <img src="images/events/05.jpg" alt="">
                            <div class="media-links color-overlay"> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/05.jpg"></a> </div>
                        </div>
                    </div>
                    <div class="vertical-item content-absolute corporate consulting">
                        <div class="item-media"> <img src="images/events/06.jpg" alt="">
                            <div class="media-links color-overlay"> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/06.jpg"></a> </div>
                        </div>
                    </div>
                    <div class="vertical-item content-absolute corporate consulting">
                        <div class="item-media"> <img src="images/events/07.jpg" alt="">
                            <div class="media-links color-overlay"> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/07.jpg"></a> </div>
                        </div>
                    </div>
                    <div class="vertical-item content-absolute corporate consulting">
                        <div class="item-media"> <img src="images/events/08.jpg" alt="">
                            <div class="media-links color-overlay"> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/08.jpg"></a> </div>
                        </div>
                    </div>
                    <div class="vertical-item content-absolute corporate consulting">
                        <div class="item-media"> <img src="images/events/09.jpg" alt="">
                            <div class="media-links color-overlay"> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/09.jpg"></a> </div>
                        </div>
                    </div>
                    <div class="vertical-item content-absolute corporate consulting">
                        <div class="item-media"> <img src="images/events/10.jpg" alt="">
                            <div class="media-links color-overlay"> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/10.jpg"></a> </div>
                        </div>
                    </div>
                    <div class="vertical-item content-absolute corporate consulting">
                        <div class="item-media"> <img src="images/events/11.jpg" alt="">
                            <div class="media-links color-overlay"> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/11.jpg"></a> </div>
                        </div>
                    </div>
                    <div class="vertical-item content-absolute corporate consulting">
                        <div class="item-media"> <img src="images/events/12.jpg" alt="">
                            <div class="media-links color-overlay"> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="images/gallery/12.jpg"></a> </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="page_footer ds parallax section_padding_top_75 section_padding_bottom_50 columns_padding_25 table_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-md-push-4 text-center">
                            <div class="widget widget_text"> <a href="./" class="logo bottommargin_30">
                            <img src="images/logo-light.png" alt="">
                        </a>
                                <p>Our modern and fully equipped equestrian centre is happy to offer everything from polo and show-jumping to horse riding trips.</p>
                                <p class="grey highlightlinks"> 2375 Circle Drive, Houston, TX 77027<br> 643-68-5796<br> <a href="mailto:equestria@exml.com">equestria@exml.com</a> </p>
                                <p class="topmargin_25"> <a href="#" class="social-icon color-icon rounded-icon border-icon soc-facebook"></a> <a href="#" class="social-icon color-icon rounded-icon border-icon soc-twitter"></a> <a href="#" class="social-icon color-icon rounded-icon border-icon soc-google"></a>								<a href="#" class="social-icon color-icon rounded-icon border-icon soc-linkedin"></a> <a href="#" class="social-icon color-icon rounded-icon border-icon soc-youtube"></a> </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-md-pull-4 text-center">
                            <div class="widget widget_recent_entries widget_media_margin">
                                <h3 class="widget-title">Recent posts</h3>
                                <ul class="greylinks">
                                    <li>
                                        <p class="bottommargin_0"> <a href="blog-single-left.html">Traditions of Training: History of Natural Horse Training</a> </p>
                                        <p class="inline-content darklinks hover-color3 small-text thin"> <a href="blog-single-right.html">
                                        <i class="rt-icon2-calendar4 rightpadding_5 highlight3"></i>
                                        <time datetime="2017-10-03T08:50:40+00:00">
                                            15.09
                                        </time>
                                    </a> <a href="blog-right.html">
                                        <i class="rt-icon2-user rightpadding_5 highlight3"></i>
                                        admin
                                    </a> <a href="blog-right.html">
                                        <i class="rt-icon2-clip rightpadding_5 highlight3"></i>
                                        news
                                    </a> </p>
                                    </li>
                                    <li>
                                        <p class="bottommargin_0"> <a href="blog-single-left.html">How to Introduce New Horses to Your Herd</a> </p>
                                        <p class="inline-content darklinks hover-color3 small-text thin"> <a href="blog-single-right.html">
                                        <i class="rt-icon2-calendar4 rightpadding_5 highlight3"></i>
                                        <time datetime="2017-10-03T08:50:40+00:00">
                                            15.09
                                        </time>
                                    </a> <a href="blog-right.html">
                                        <i class="rt-icon2-user rightpadding_5 highlight3"></i>
                                        admin
                                    </a> <a href="blog-right.html">
                                        <i class="rt-icon2-clip rightpadding_5 highlight3"></i>
                                        news
                                    </a> </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="widget widget_mailchimp widget_media_margin">
                                <h3 class="widget-title">Newsletter</h3>
                                <form class="signup" action="./" method="get">
                                    <p class="bottommargin_30">Subscribe to our mailing list to receive new updates and special offers:</p>
                                    <div class="form-group-wrap">
                                        <div class="form-group"> <label for="footer-mailchimp" class="sr-only">Enter your email here</label> <input name="email" type="email" id="footer-mailchimp" class="mailchimp_email form-control" placeholder="Email Address"> </div> <button type="submit" class="theme_button no_bg_button color2">Subscribe</button>									</div>
                                    <div class="response"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <section class="ls page_copyright section_padding_15">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <p class="small-text thin">&copy; Copyright 2017. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- eof #box_wrapper -->
        </div>
        <!-- eof #canvas -->
        <script src="js/compressed.js"></script>
        <script src="js/main.js"></script>
        <!-- Google Map Script -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTwYSMRGuTsmfl2z_zZDStYqMlKtrybxo"></script>
    </body>
    
    </html> --}}
    