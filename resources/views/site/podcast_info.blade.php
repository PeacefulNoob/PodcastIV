@extends('layouts.main')
@section('content')
<div class="my-5">
    
        <section class="leftView d-flex">
            <div class="single_episode my-2 col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12 ">
                <div class="single_episode-body">
                    <h5 class="single_episode-sub_title my-3 font-weight-bold">{{$epizoda->sezona->title}}</h5>
                  
                    <h5 class="single_episode-title mb-4 font-weight-bold"><a href="#">{{$epizoda->title}}</a></h5>
                    <div class="product-filter-icons mb-5">
                        <a href="#" class="facebook-bg" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="pinterest-bg" target="_blank" ><i class="fa fa-instagram"></i></a>

                </div>
                    <div class="single_episode-desc"><p>{{$epizoda->description}}</p>
                     </div>

                </div>
            </div>

            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12  mb-5">
                <a class="single_episode-img" href="#"><img src="/assets/images/epizoda/{{$epizoda->image}}" alt="Episode Image">
                </a>
            </div>
{{--             ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 --}}    
                @if ($epizoda->yt_url)
                <div class="col-12">
                    <h3 class="my-5">Pogledajte epizodu na našem Youtube kanalu</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$epizoda->yt_url}}"></iframe>
                </div>
            </div>
                @endif       
<div class="scDiv">
                {!!$epizoda->sc_url!!}
                    
                    
                    
            </div>

{{--             ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 --}}   
 </section>
    <section class="rightView">
        <div class="single_episode my-2">
            <section class="tabSezoneInfo"><ul class="tabs clearfix" data-tabgroup="first-tab-group">

                @foreach ($sezone as $sezona)
                <li><a href="#{{$sezona->id}} ">
                    <p>
                   @php
												
                        echo substr($sezona->title, 0, 9);
                    @endphp </p>
              </a></li>
                @endforeach
      
              </ul>
              <section id="first-tab-group" class="tabgroup">
                @foreach ($sezone as $sezona)

                          <div id="{{$sezona->id}}">
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
                                                    <div class="episode-body tabBody">
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