@extends('layouts.main')
@section('content')
    <section id="section1" > 
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
       
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img class="slImage" src="assets/images/Homepage_cover.jpg" alt="Los Angeles">
              </div>
          
              <div class="item">
                <img class="slImage"  src="assets/images/Homepagecover3.png" alt="Chicago">
              </div>
          
              <div class="item">
                <img  class="slImage" src="assets/images/Homepage_cover.jpg" alt="New York">
              </div>
            </div>
         
          </div>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <div class="overlayHome"></div>
        <div class="homeButtons">

            <div class="row">
                @if(count($sezone) > 0)

                @foreach ($sezone as $sezona)
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 ">     
                            <a href="/sezona/{{$sezona->id}}">
                        <button class="buttonSeason">
                            @php
												
                            echo substr($sezona->title, 0, 14);
                        @endphp   
                        </button>
                    </a>
                    </div>
                     @endforeach
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
                @foreach ($epizode as $epizoda)
                <div class="row">
                    {{-- epizoda --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mx-0 px-0">


                            <div class="episode my-2 d-flex">
                                <a class="episode-img" href="/epizoda/{{$epizoda->id}}"><img
                                        src="/assets/images/epizoda/{{$epizoda->image}}" alt="Episode Image"></a>
                                <div class="episode-body ">
                                    <div class="d-flex">
                                    <h6 class="episode-sub_title ghost font-weight-bold">{{$epizoda->sezona->title}}</h6>
                                    <div class="share-button"><img src="/assets/images/Share-ikonica.svg" alt=""></div>
                                  
                                </div>
                                  <h5 class="episode-title mt-1 mb-5"><a href="/epizoda/{{$epizoda->id}}">
                                    @php
                                        echo substr($epizoda->title, 0, 60);
                                    @endphp
                                            </a>
                                        </h5>
                                        <div class="episode-desc mb-3">
                                            <p class="ghost">@php
                                            
                                                echo substr($epizoda->description, 0, 350);
                                            @endphp... </p>
                                          
                                        </div>
                                        <div class="soundcloud-main">  {!!$epizoda->sc_url!!}</div>
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

                    @else 
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <a href="#">
                            <div class="slika">
                                <img src="/assets/images/skocko.png" alt="podcast">
                                </div>      </a>
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

<div class="col-9 mr-auto ml-0 text-white">
<p>Igor i vlado u medijima je mjesto na kome ste u mogućnosti da ispratite cjelokupan rad ova dva fenomena ljudske kreacije i pročitate po koju pametnu o sportu, životu, naciji, a ne i politici. Ođe neki opis osmislite da ubačimo. Poy!</p>
</div>
<div class="col-2 ml-auto mr-0 ">
    <button class="buttonSeason">
      POGLEDAJ SVE
    </button>
</div>

        </div>
        @foreach ($posts as $post)
            
       
    @endforeach

</div>
    </section>
@endsection