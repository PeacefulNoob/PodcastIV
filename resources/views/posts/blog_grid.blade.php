@extends('layouts.main')
@section('head_index')

	<!-- META DATA -->
    <title>Igor i Vlado Podcast | Mediji</title>

    <meta name="description" content="Igor i Vlado Podcast | Igor i vlado u medijima je mjesto na kome ste u mogućnosti da ispratite cjelokupan rad ova dva fenomena ljudske kreacije">
    <meta name="author" content="QQRIQ PeacefulNoob">
    <meta name="keywords" content="Igor i Vlado Podcast | Mediji">
    
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <meta property="og:image" content="https://igorivlado.com/assets/images/shareOg.png" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://igorivlado.com/post" />
    <meta property="og:title" content="Igor i Vlado Podcast | Mediji" />
    <meta property="og:description" content="Igor i vlado u medijima je mjesto na kome ste u mogućnosti da ispratite cjelokupan rad ova dva fenomena ljudske kreacije i pročitate po koju pametnu o sportu, životu, naciji, a ne i politici. Ođe neki opis osmislite da ubačimo. Poy!" />
    
    @endsection
@section('content')
<style>
  
    main {
    margin-top: 0% !important;
}
</style>
		<!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image " >
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white ">
							<h1 class="">Mediji</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="/">Početna</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Mediji</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Breadcrumb-->
<!--Add listing-->
<section class="sptb py-5 my-5">
    <div class="container">
        <div class="row">
            <!--Add lists-->
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="row">
                    @if(count($posts) > 0)

                    @foreach ($posts as $post)
                        
              
                    <div class="col-xl-4 col-lg-4 col-md-6 my-4">
                        <div class="card">
                            <div class="item7-card-img">
                                <a href="/post/{{$post->id}}"></a>
                                <img src="/assets/images/post_images/{{$post->cover_image}}" alt="img" class="cover-image">
                                <div class="item7-card-text">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="item7-card-desc d-flex mb-2">
                                   <i class="fa fa-calendar-o text-muted mr-2"></i>{{ $post->created_at}}
                                    <div class="ml-auto">
										<i class="fa fa-comment-o text-muted mr-2"></i>{{$post->comments->count()}} Komentara
                                    </div>
                                </div>
                                <a href="/post/{{$post->id}}}" class="text-dark">
                                    <h4 class="font-weight-semibold">  @php
                                                        
                                        echo substr($post->title, 0, 50);
                                    @endphp ...</h4>
                                </a>
                                <p> @php
                                                        
                                    echo substr($post->body, 0, 90);
                                @endphp  ...</p>
                                <a href="/post/{{$post->id}}" class="btn btn-primary btn-sm">Opširnije</a>
                            </div>
                        </div>
                    </div>
                 
                    @endforeach
                    @else 
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">

                            Nema Medija
                        </div>
                    </div>
                    </div>
                    @endif
                </div>
         
            </div>
            <!--/Add lists-->

            <!--Right Side Content-->
            <div class="col-xl-4 col-lg-4 col-md-12">
              
          
            </div>
            <!--/Right Side Content-->
        </div>
    </div>
</section>
<!--Add listing-->
<script type="text/javascript">
    window.onload = function(){
        location.href=document.getElementById("selectbox").value;
    }       
</script>

@endsection