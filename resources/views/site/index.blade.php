@extends('layouts.main')

@section('head_index')

	<!-- META DATA -->
    <title>Igor i Vlado Podcast | Početna Strana</title>

    <meta name="description" content="Igor i Vlado Podcast | Početna Strana">
    <meta name="author" content="QQRIQ PeacefulNoob">
    <meta name="keywords" content="Igor i Vlado Podcast | Početna Strana">

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <meta property="og:image" content="https://igorivlado.com/assets/images/shareOg.png" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://igorivlado.com/" />
    <meta property="og:title" content="Igor i Vlado Podcast | Početna Strana" />
    <meta property="og:description" content="Igor i Vlado Podcast | Početna Strana" />
    
    @endsection



@section('content')
<section id="section1">

         <div class="slImage"></div>       


   

    <div class="overlayHome"></div>
    <div class="homeButtons">

        <div class="row">
            @if(count($sezone) > 0)

                @foreach($sezone as $sezona)
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                        <a href="/sezona/{{ $sezona->id }}">
                        <button class="buttonSeason" data-id="{{ $sezona->id}}">
                                @php

                                    echo substr($sezona->title, 0, 14);
                                @endphp
                            </button>
                        </a>
                    </div>
                @endforeach
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                <a href="/noSeason">
                    <button class="buttonSeason pos-relative">
                      <img src="/assets/images/Uskoro.png" class="uskoro" alt="">

                              Sezona 4
                         
                        </button>
                    </a>
                </div>

            @else
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 ">

                    <h1>Nema Sezona</h1>
                </div>
            @endif
        </div>

    </div>
</section>

<section id="section2">

    <div class="postDiv py-5">
        <div class="row justify-content-center ">
            <h2 class="hafter">NAJAKTUELNIJE PODCAST EPIZODE</h2>
            
        </div>
        <div class="row">
            @if(count($epizode) > 0)
                <?php
					$colcount = count($epizode);
					$i = 1;
					?>
                @foreach($epizode as $epizoda)
                    <div class="row">
                        {{-- epizoda --}}
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mx-0 px-0">
                            <div class="episode my-2 p0  d-flex">
                                <a class="episode-img" href="/epizoda/{{ $epizoda->id }}"><img
                                        src="/assets/images/epizoda/{{ $epizoda->image }}" alt="Episode Image"></a>
                                <div class="episode-body ">
                                    @if ($epizoda->guest1)
                                    <div class="episode-guest"> Gost emisije : {{ $epizoda->guest1 }}</div>
                                    @endif
                                    <div class="d-flex">
                                        <h6 class="episode-sub_title ghost font-weight-bold">
                                           Epizoda:{{ $epizoda->brojEpizode }}</h6>
                                        <div class="share-button">
                                            <img src="/assets/images/Group4.svg" alt="">
                                       
                                            <div class="fb-share-button" data-href="https://igorivlado.com/epizoda/{{ $epizoda->id }}" data-layout="button" 
                                                data-size="small"><a target="_blank" 
                                                href="https://igorivlado.com/epizoda/{{ $epizoda->id }}" class="fb-xfbml-parse-ignore"></a></div>
                                        </div>
                                    </div>
                                    <h4 class="episode-title mt-1 mb-3"><a href="/epizoda/{{ $epizoda->id }}">
                                            @php
                                                echo substr($epizoda->title, 0, 60);
                                            @endphp
                                        </a>
                                    </h4>
                                    <div class="episode-desc mb-1">
                                        <p class="ghost">@php

                                            echo substr($epizoda->description, 0, 350);
                                                       @endphp... </p>

                                       </div>
                              {{--          <div class="posRel">  
                                        <a href="/epizoda/{{ $epizoda->id }}">        <div class="scOverlay">   </div> </a> 
                                     <div class="soundcloud-main"> {!!$epizoda->sc_url!!} </div>

                                    </div> --}}
                                </div>
                         </div>
                    </div>
    {{-- kraj epizode --}}


    </div>
    <?php	
                          if ($i++ == 4)
                          break;
                        ?>
    @endforeach
    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 ml-auto mr-0  px-5">
        <a href="/sezona/1">  <button  class="buttonSeason dark">
              POGLEDAJ SVE
          </button>
      </a>
      </div>
@else
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <a href="#">
            <div class="slika">
                <img src="/assets/images/skocko.png" alt="podcast">
            </div>
        </a>
    </div>
    @endif
    </div>
    </div>
</section>

<section>
    <div class=" div1 my-5">

        <div class="row justify-content-center ">
            <h2 class="hafterGrey text-white">IGOR I VLADO U MEDIJIMA</h2>
        </div>
        <div class="row pogledajSve">

            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 mr-auto ml-0 text-white">
                <p>Igor i vlado u medijima je mjesto na kome ste u mogućnosti da ispratite cjelokupan rad ova dva
                    fenomena ljudske kreacije i pročitate po koju pametnu o sportu, životu, naciji, a ne i politici. Ođe
                    neki opis osmislite da ubačimo. Poy!</p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 ml-auto mr-0  px-5">
              <a href="/post">  <button href="/post" class="buttonSeason">
                    POGLEDAJ SVE
                </button>
            </a>
            </div>

        </div>

        <div class="container-fluid">
            <div class="site-block-retro d-block d-md-flex">
                @php $counter = 0; @endphp
                @foreach($posts as $post)
                        @if ($counter == 0)
                           <a href="/post/{{$post->id}}}" class="col1 unit-9 no-height" data-aos="fade-up" data-aos-delay="100">
                            <div class="medijaOverlay"></div>

                        <div class="image" style="background-image: url('/assets/images/post_images/{{$post->cover_image}}');"></div>
                        <div class="authorMedia"> {{$post->user->name}} <img src="/assets/images/iconfinder_fill-web5-18_5084662.svg" alt=""></div>
                        <div class="unit-9-content">
                            
                            <h3>
                                @php

                                    echo substr($post->title, 0, 150);
                                 @endphp...
                            </h3>
                            <span>
                                @php

                                echo substr($post->body, 0, 150);
                                   @endphp...
                             </span>
                        </div>
                        </a>
                        @else
                       
                            @if ($counter == 1)
                            <div class="col2 ml-auto">
                            <a href="/post/{{$post->id}}}" class="col2-row1 unit-9 no-height" data-aos="fade-up" data-aos-delay="200">
                                <div class="medijaOverlay"></div>
                                <div class="image" style="background-image: url('/assets/images/post_images/{{$post->cover_image}}');"></div>
                                <div class="authorMedia"> {{$post->user->name}} <img src="/assets/images/iconfinder_fill-web5-18_5084662.svg" alt=""></div>

                                <div class="unit-9-content dva">
                                    <h4>
                                        @php

                                            echo substr($post->title, 0, 90);
                                         @endphp...
                                    </h4>
                                    <span>
                                        @php

                                        echo substr($post->body, 0, 150);
                                           @endphp...
                                     </span>
                                </div>
                                </a>
                                @else

                                <a href="/post/{{$post->id}}}" class="col2-row1 unit-9 no-height" data-aos="fade-up" data-aos-delay="200">
                                    <div class="medijaOverlay"></div>
                                    <div class="image" style="background-image: url('/assets/images/post_images/{{$post->cover_image}}');"></div>
                                    <div class="authorMedia"> {{$post->user->name}} <img src="/assets/images/iconfinder_fill-web5-18_5084662.svg" alt=""></div>

                                    <div class="unit-9-content dva">
                                        <h4 >
                                            @php
    
                                                echo substr($post->title, 0, 30);
                                             @endphp
                                        </h4>
                                        <span>
                                            @php
    
                                            echo substr($post->body, 0, 150);
                                               @endphp...
                                         </span>
                                    </div>
                                    </a>
                                </div>
                                @endif
                           
                    
                          
                    
                        
                        @endif
                            @php $counter++;

                            @endphp
                           <?php	
                           if ($counter == 3)
                           break;
                         ?>
             
                 @endforeach
              </div>
               

              
            </div>
        </div>
    </div>
</section>
@endsection
