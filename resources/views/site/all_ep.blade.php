@extends('layouts.main')
@section('content')
 
    <section id="section2" class="my-5">
        <h2 class="hafter text-center">{{$sezona->title}} </h2>

        <div class="my-5 main">
            <div class="mainTekst py-5">
                <p>Podcast Igor i Vlado je naš pokušaj
                    -
                    Igora Majera, organizatora
                    sportskih događaja i Vlada Perovića, Ivinog tate
                    -
                    da izliječimo
                    zajedničku hiperaktivnost terapeutskim ''dušenjem'' u
                    vremenskom
                    okviru od sat do dva makar
                    jednom nedjeljno. Naša ideja je
                    da
                    pokušamo da vam pričamo o stvarima koje nas zanimaju, a kako
                    nemamo baš ista mišljenja na iste teme, vjerujemo da će svi da vole
                    Igora, a ovi ostali da vole Vlada. Ž
                    elimo da vam stavimo do znanja da
                    ako mi možemo, svi možete.
                    N
                    aše je da pričamo, vaše je
                    da nas
                    poslušate i
                    usvojite našu priču, pokrenete se, s
                    ugerišete teme,
                    komentarišete, napravite svoj podcast.</p>
            </div>

        </div>
    


    <section>
        <div class="postDiv my-5">
        
        <div class="row justify-content-center ">
            <h2 class="hafter">Igor i Vlado Epizode  </h2>
            <br>
           
        </div>
        @foreach ($epizode as $epizoda)
            
        <div class="row">
            <div class="col-md-12 my-1">
                <div class="episode my-2 d-flex">
                    <a class="episode-img" href="/epizoda/{{ $epizoda->id }}"><img
                            src="/assets/images/epizoda/{{ $epizoda->image }}" alt="Episode Image"></a>
                    <div class="episode-body ">
                        <div class="d-flex">
                            <h6 class="episode-sub_title ghost font-weight-bold">
                                {{ $sezona->title }}</h6>
                            <div class="share-button"><img src="/assets/images/Share-ikonica.svg" alt="">
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
                        <div class="soundcloud-main"> {!!$epizoda->sc_url!!}</div>
                        <div class="episode-guest"> Gost emisije : {{ $epizoda->guest1 }}</div>
                    </div>
             </div>
            </div>
    </div>
    @endforeach

</div>
    </section>
@endsection