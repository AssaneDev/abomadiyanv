@php
    $projet = App\Models\projet::latest()->limit(9)->get();
@endphp
<section class="wptb-project pt-0">
    <div class="container">
        <div class="wptb-heading-two">
            <div class="wptb-item--inner text-center">
                <h6 class="wptb-item--subtitle">Le Bonheur de nos clients</h6>
                <h1 class="wptb-item--title"> Les Evenements couverts par <br> Abo <span>Madiyanv</span> </h1>
                <div class="wptb-item--description">
                    nous avons eu le privilège de capturer des moments mémorables pour<br> une variété de clients, allant des célébrités aux particuliers, en passant par des entreprises renommées. 
                </div>
            </div>
        </div>

        <div class="style-masonry effect-blur">
            <div class="grid grid-3 gutter-10 clearfix"> 
                <div class="grid-sizer"></div> 
                
                @foreach ($projet as $item)
                    
                
                <div class="grid-item">
                    <div class="wptb-item--inner">
                        <div class="wptb-item--image">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$item->url_video}}" frameborder="0" allowfullscreen></iframe>
                        </div>

                      
                    </div>
                </div> 

                @endforeach

               
                               
             
            </div>
        </div>
    </div>
</section>