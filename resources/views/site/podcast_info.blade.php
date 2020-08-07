@extends('layouts.main')
@section('head_index')

	<!-- META DATA -->
    <title>Igor i Vlado Podcast | Epizoda {{$epizoda->title}}</title>

    <meta name="description" content="Igor i Vlado Podcast Epizoda">
    <meta name="author" content="QQRIQ PeacefulNoob">
    <meta name="keywords" content="Igor i Vlado Podcast">
    <meta name="author" content="PeacefulNoob">
    
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <meta property="og:image" content="https://igorivlado.com/assets/images/epizoda/{{$epizoda->image}}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://igorivlado.com/epizoda/{{$epizoda->id}}" />
    <meta property="og:title" content="Igor i Vlado Podcast | Epizoda  {{$epizoda->title}}" />
    <meta property="og:description" content="Igor i Vlado Podcast | Epizoda {{$epizoda->title}}" />
    
    @endsection


@section('content')
<div class="my-5">
    
        <section class="leftView d-flex">
            <div class="single_episode my-2 col-xl-9 col-lg-9 col-md-7 col-sm-12 col-xs-12 ">
                <div class="single_episode-body">
                    <h6 class="single_episode-sub_title my-3 font-weight-bold">Epizoda : {{$epizoda->brojEpizode}}</h6>
                  
                    <h2 class="single_episode-title mb-4 font-weight-bold"><a href="#">{{$epizoda->title}}</a></h2>
                    <div class="product-filter-icons mb-5">
                      
                               <div class="fb-share-button" data-href="https://igorivlado.com/epizoda/{{ $epizoda->id }}" data-layout="button" 
                            data-size="small"><a target="_blank" 
                            href="https://igorivlado.com/epizoda/{{ $epizoda->id }}" class="fb-xfbml-parse-ignore"></a></div>
                      
                            

                </div>
                    <div class="single_episode-desc"><p>{{$epizoda->description}}</p>
                     </div>

                </div>
            </div>

            <div class="col-12 ">
                <h3 class="my-5">Poslušajte epizodu na našem Soundcloud kanalu</h3>
                <div class="scDiv">
                {!!$epizoda->sc_url!!}
            </div>
        </div>
                @if ($epizoda->yt_url)
                <div class="col-12 my-5">
                    <h3 class="my-5">Pogledajte epizodu na našem Youtube kanalu</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$epizoda->yt_url}}"></iframe>
                </div>
            </div>
                @endif       
    {{--         <div class="scDiv">
                {!!$epizoda->sc_url!!}
            </div> --}}

{{--             ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 --}}   
 </section>
    <section class="rightView">
        <div class="single_episode my-2">
            <section class="tabSezoneInfo"><ul class="tabs clearfix" data-tabgroup="first-tab-group">

                @foreach ($sezone as $sezona)
                <li><a href="#{{$sezona->id}} " class="{{$sezona->active}}">
                    <p>
                   @php
												
                        echo substr($sezona->title, 0, 9);
                    @endphp </p>
              </a></li>
                @endforeach
      
              </ul>
              <section id="first-tab-group" class="tabgroup1">
                @foreach ($sezone as $sezona)

                          <div id="{{$sezona->id}}" >
                             <div  class="wrap-bg">
                                  
                                  <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mbt30">
                                        <!-- 1 -->
                                        <div class="single-features-light scrollY"><!-- single features -->
                                            <!-- uses solid style -->
                                            <h5>
                                                @php
												
                                                echo substr($sezona->title, 0, 12);
                                            @endphp 
                                           
                                            </h5>
                                            @foreach ($sezona->epizoda as $epizoda)
                                                <div class="">
                                                    <div class="episode h-auto my-2">
                                                    <a class="episode-img tab_image" href="/epizoda/{{$epizoda->id}}"><img src="/assets/images/epizoda/{{$epizoda->image}}" alt="Episode Image"></a>
                                                    <div class="episode-body mgr32 tabBody">
                                                        <p class="episode-title font-weight-bold"><a href="/epizoda/{{$epizoda->id}}">
                                                            @php
												
                                                            echo substr($epizoda->title, 0, 20);
                                                        @endphp 
                                                  </a></p>
                                                        
                                                    </div>
                                                </div>
                                                </div>
                                            @endforeach
                                        </div><!-- end single features -->
                                    </div>
                                    </div>
                                 
                                  </div>
                              </div>

                              @endforeach
                           
              
              </section>
                </section>

        </div>
</section>
</div>
@endsection