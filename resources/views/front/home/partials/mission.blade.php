<section id="mission" class="ls overflow_hidden section_padding_top_150 section_padding_bottom_150 columns_padding_50">
        <div class="image_cover image_cover_left">
            <!-- you can put your image here instead of puting it in column-->
            <!-- <img src="images/person.jpg" alt=""> --></div>
        <div class="container">
            <div class="row">
            <div class="col-md-6"> <img src="{{Storage::disk("imageAction")->url($father->image)}}" alt=""> </div>
                <!-- .col-* -->
                <div class="col-md-6">
                 
                    <p>{!!$textMission->contenu!!}</p>
                    <p class="topmargin_40"> <a href="about.html" class="theme_button color3 min_width_button">Know more</a> </p>
                </div>
                <!-- .col-* -->
            </div>
        </div>
</section>