@extends('layouts.main')
@section('head_index')

	<!-- META DATA -->
    <title>Igor i Vlado Podcast | Mediji Post {{$post->title}}</title>

    <meta name="description" content="Igor i Vlado Podcast |  {{$post->body}}">
    <meta name="author" content="QQRIQ PeacefulNoob">
    <meta name="keywords" content="Igor i Vlado Podcast">
    <meta name="author" content="PeacefulNoob">
    
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <meta property="og:image" content="https://igorivlado.com/assets/images/shareOg.png" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://igorivlado.com/post/{{$post->id}}" />
    <meta property="og:title" content="Igor i Vlado Podcast | Mediji Post {{$post->title}}" />
    <meta property="og:description" content="Igor i Vlado Podcast | {{$post->body}}" />
    
    @endsection
@section('content')

<!--Add listing-->
<section class="sptb">
    <div class="container my-5">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="item7-card-img">
                            <img src="/assets/images/post_images/{{ $post->cover_image }}" alt="img" class="w-100">
                            <div class="item7-card-text">
                            </div>
                        </div>
                        <div class="item7-card-desc d-flex mb-2 mt-3">
                            <i class="fa fa-calendar-o text-muted mr-2"></i>{{ $post->user->created_at }}
                           
                            <div class="ml-auto">
                                <i class="fa fa-user text-muted mx-2"></i> {{ $post->user->name }}
                            </div>
                        </div>
                        
                            <h2 class="font-weight-semibold">{{ $post->title }}</h2>
                     
                        <p>{!! $post->body !!}
                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-header">
                        <h3 class="card-title">Komentari</h3>
                    </div>


                    @if($post->comments->count())

                        <div class="card-body p-1">
                            @foreach($post->comments as $comment)

                                <div class="media mt-0 p-5">
                                    <div class="d-flex mr-3">
                                   
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1 font-weight-semibold"> {{ $comment->name }}
                                            <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="verified"><i
                                                    class="fa fa-check-circle-o text-success"></i></span>

                                        </h5>
                                        <small class="text-muted"><i class="fa fa-calendar"></i>
                                            {{ $comment->created_at->toFormattedDateString() }}
                                        </small>
                                        <p class="font-13  mb-2 mt-2">
                                            {{ $comment->body }}
                                        </p>


                                    </div>
                                </div>

                    @endforeach

                </div>

            @else
                <div class="post-comments">
                    <div class="card-body p-0">
                        <div class="media mt-0 p-5">
                            <div class="media-body">

                                <p>Nema Komentara</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif
                <div class="card  mb-lg-0">
                        <div class="card-header">
                            <h3 class="card-title">Napišite svoj komentar</h3>
                        </div>
                        <form class="post-reply" method="POST" action="/post/{{ $post->id }}/comments">
                            {{ csrf_field() }}
                            <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name1" name="name" placeholder="Vaše ime"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email adresa" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="body" rows="6" placeholder="Vaš komentar"
                                            required></textarea>
                                    </div>
                                <button class="btn btn-primary btn-md commB ">Pošalji</button>
                            </div>
                        </form>
                </div>
            </div>
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
                                                            <a class="episode-img sideImage tab_image" href="/epizoda/{{$epizoda->id}}"><img src="/assets/images/epizoda/{{$epizoda->image}}" alt="Episode Image"></a>
                                                            <div class="episode-body mgr32 ">
                                                                <p class="episode-title  sideEpT"><a href="/epizoda/{{$epizoda->id}}">
                                                                
                                                        
                                                        Ep :  {{  $epizoda->brojEpizode}}       {{  $epizoda->title}}  
                                                         
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
                <!--/Rightside Content-->
            </div>
        </div>
</section>
<!--/Add listing-->



@endsection
