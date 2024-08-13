@php
    $videos = App\Models\video::latest()->limit(5)->get();
@endphp
<section class="wptb-slider  style4">
    <div class="wptb-heading-two">
        <div class="wptb-item--inner text-center">
            <h6 class="wptb-item--subtitle">Videaste PRO</h6>
            <h1 class="wptb-item--title"> Capturer vos souvenir avec <br> <span>Abo Madiyanv</span></h1>
            <div class="wptb-item--description">
                Plus de <span>508</span>  Evenements Couverts <br><span> Mariages, Baptems, AnyTime, ads-entreprise</span>
            </div>
        </div>
    </div>

    <div class="swiper-container wptb-swiper-slider-four">    
        <!-- swiper slides -->
        <div class="swiper-wrapper">
            <!-- Slide Item -->
            @foreach ($videos as $video)
            <div class="swiper-slide">
                <div class="wptb-slider--item">
                    <div class="wptb-slider--image">
                        
                      <video src="{{asset($video->video)}} " type="video/mov" controls ></video>
                    </div>
                </div>
            </div>

            @endforeach
            
            <!-- End Slide Item -->

          
        </div>
    </div>

    <!-- Layer Image -->
    <div class="wptb-item-layer wptb-item-layer-one both-version">
        <img src=" {{asset('frontend/assets/img/background/overlay.png')}} " alt="img">
        <img src=" {{asset('frontend/assets/img/slider/texture-1-light.png')}} " alt="img">
    </div>

    <!-- Layer Image -->
    <div class="wptb-item-layer wptb-item-layer-two both-version">
        <img src=" {{asset('frontend/assets/img/slider/round.png')}} " alt="img">
        <img src=" {{asset('frontend/assets/img/slider/round-light.png')}} " alt="img">
    </div>

    <!-- Layer Image -->
    <div class="wptb-item-layer wptb-item-layer-three both-version">
        <img src=" {{asset('frontend/assets/img/slider/overlay.png')}} " alt="img">
        <img src=" {{asset('frontend/assets/img/slider/overlay-light.png')}} " alt="img">
    </div>
    
</section>