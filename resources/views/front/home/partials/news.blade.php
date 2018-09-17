
<section id="news" class="ls ms texture_bg section_padding_top_150 section_padding_bottom_150">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header">Latest News</h2>
                    <div class="owl-carousel text-nav" data-responsive-lg="3" data-nav="true" data-margin="60">
                        @foreach($latestNews as $latestNew)
                            <article class="vertical-item content-padding big-padding with_background">
                            <div class="item-media"> <img src="{{Storage::disk("imageActualite")->url($latestNew->image)}}" alt="">
                                    <div class="media-links"> <a href="blog-single-right.html" class="abs-link"></a> </div>
                                </div>
                                <div class="item-content">
                                <h4 class="entry-title hover-color2"> <a href="blog-single-right.html">{{$latestNew->titre}}</a> </h4>
                                <p class="content-3lines-ellipsis">{!!$latestNew->description!!}</p>
                                </div>
                                <footer class="item-meta small-text darklinks">
                                    <div class="inline-content"> <a href="blog-single-right.html">
                                <i class="rt-icon2-calendar4 rightpadding_5 highlight"></i>
                                <span>22.09</span>
                            </a> 
                               
                                 <a href="blog-right.html">
                                <i class="rt-icon2-clip rightpadding_5 highlight"></i>
                                news
                            </a> </div>
                                </footer>
                            </article>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </section>