@extends('layouts.main')
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
            <li><a href="#{{ $sezona->id }} ">{{ $sezona->title }} </a></li>
        @endforeach

    </ul>
    <section id="first-tab-group" class="tabgroup">
        @foreach($sezone as $sezona)

            <div id="{{ $sezona->id }}">
                @foreach($sezona->epizoda as $epizoda)

                    <div class="wrap-bg">

                        <div class="row">
                            {{-- epizoda --}}
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mbt30">

                                <div class="single-features-light">

                                    <div class="episode my-2">
                                        <a class="episode-img" href="/epizoda/{{$epizoda->id}}"><img
                                                src="/assets/images/epizoda/{{$epizoda->image}}" alt="Episode Image"></a>
                                        <div class="episode-body">
                                            <h6 class="episode-sub_title font-weight-bold">{{$epizoda->sezona->title}}</h6>
                                            <h5 class="episode-title font-weight-bold"><a href="/epizoda/{{$epizoda->id}}">@php
												
                                                echo substr($epizoda->title, 0, 14);
                                            @endphp
                                                    </a></h5>
                                            <div class="episode-desc">
                                                <p class="">@php
												
                                                    echo substr($epizoda->description, 0, 60);
                                                @endphp... </p>
                                              
                                            </div>
                                        </div>
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
