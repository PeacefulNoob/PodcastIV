@extends('layouts.main')

@section('content')

		<!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image " >
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white ">
							<h1 class="">Mediji</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="#">Početna</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Mediji</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Breadcrumb-->
<!--Add listing-->
<section class="sptb my-5">
    <div class="container">
        <div class="row">
            <!--Add lists-->
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="row">
                    @if(count($posts) > 0)

                    @foreach ($posts as $post)
                        
              
                    <div class="col-xl-4 col-lg-4 col-md-6">
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
                                <a href="#" class="text-dark">
                                    <h4 class="font-weight-semibold">  @php
                                                        
                                        echo substr($post->title, 0, 14);
                                    @endphp </h4>
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