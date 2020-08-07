@extends('layouts.main')
@section('head_index')

	<!-- META DATA -->
<title>Igor i Vlado Podcast | Podcast strana</title>
    <meta name="description" content="Podcast Igor i Vlado je naš pokušaj - Igora Majera, organizatora sportskih događaja i Vlada Perovića, Ivinog tate - da izliječimo zajedničku hiperaktivnost terapeutskim ''dušenjem'' u vremenskom okviru od sat do dva makar jednom nedjeljno.">
    <meta name="author" content="QQRIQ PeacefulNoob">
    <meta name="keywords" content="Igor i Vlado Podcast | Podcast strana">
    <meta name="author" content="PeacefulNoob">
    
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <meta property="og:image" content="https://igorivlado.com/assets/images/shareOg.png" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://igorivlado.com/podcast" />
    <meta property="og:title" content="Igor i Vlado Podcast | Podcast strana" />
    <meta property="og:description" content="Podcast Igor i Vlado je naš pokušaj - Igora Majera, organizatora sportskih događaja i Vlada Perovića, Ivinog tate - da izliječimo zajedničku hiperaktivnost terapeutskim ''dušenjem'' u vremenskom okviru od sat do dva makar jednom nedjeljno." />
    
    @endsection
@section('content')
<section id="sectionp">

    <div class="container my-5">
        <p>Podcast Igor i Vlado je naš pokušaj - Igora Majera, organizatora sportskih događaja i Vlada Perovića, Ivinog tate - da izliječimo zajedničku hiperaktivnost terapeutskim ''dušenjem'' u vremenskom okviru od sat do dva makar jednom nedjeljno. Naša ideja je da pokušamo da vam pričamo o stvarima koje nas zanimaju, a kako nemamo baš ista mišljenja na iste teme, vjerujemo da će svi da vole Igora, a ovi ostali da vole Vlada. Ž elimo da vam stavimo do znanja da ako mi možemo, svi možete. N aše je da pričamo, vaše je da nas poslušate i usvojite našu priču, pokrenete se, s ugerišete teme, komentarišete, napravite svoj podcast.

        </p>
    </div>
    <h2 class="text-center my-5">Podcast</h2>
</section>
<section class="tabSezone">
    <ul class="tabs clearfix" data-tabgroup="first-tab-group">

        @foreach($sezone as $sezona)
            <li><a class="{{ $sezona->id }}"  href="#{{ $sezona->id }} ">{{ $sezona->title }} </a></li>
        @endforeach

    </ul>
    <section id="first-tab-group" class="tabgroup">
        @foreach($sezone as $sezona)

            <div id="{{ $sezona->id }}">
                @foreach($sezona->epizoda as $epizoda)

                    <div class="wrap-bg">

                        <div class="row">
                            {{-- epizoda --}}
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mx-0 px-0">


                                <div class="episode my-2 d-flex">
                                    <a class="episode-img" href="/epizoda/{{ $epizoda->id }}"><img
                                            src="/assets/images/epizoda/{{ $epizoda->image }}" alt="Episode Image"></a>
                                    <div class="episode-body ">
                                        <div class="episode-guest"> Gost emisije : {{ $epizoda->guest1 }}</div>
    
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
                                        <h5 class="episode-title mt-1 mb-3"><a href="/epizoda/{{ $epizoda->id }}">
                                                @php
                                                    echo substr($epizoda->title, 0, 60);
                                                @endphp
                                            </a>
                                        </h5>
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

                    </div>
                    @endforeach

            </div>

        @endforeach



    </section>
</section>
@endsection
