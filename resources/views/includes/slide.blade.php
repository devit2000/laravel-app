<section class="welcome_area">
    <div class="welcome_slides owl-carousel">
        @foreach ($slideshow as $s)
            <!-- Single Slide Start -->
            <div class="single_slide height-800 bg-img background-overlay"
                style="background-image: url(img/bg-img/{{ $s->img }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="welcome_slide_text">
                                <h6 data-animation="bounceInDown" data-delay="0" data-duration="500ms">{{ $s->subtitle }}
                                </h6>
                                <h2 data-animation="fadeInUp" data-delay="500ms" data-duration="500ms">
                                    {{ $s->title }}</h2>
                                <a href="#" class="btn karl-btn" data-animation="fadeInUp" data-delay="1s"
                                    data-duration="500ms">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
