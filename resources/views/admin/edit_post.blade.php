
@extends('layouts.app')

@section('content')


		<!--Add posts-section-->
		<section class="sptb my-5">
			<div class="container">
				<div class="row ">

					<div class="col-lg-8 col-md-12 col-md-12">
						<div class="item7-card-img maxh50">
							<a href="#"></a>
							<img src="/assets/images/post_images/{{ $post->cover_image }}" alt="img" class="cover-image">
						</div>
						<div class="card ">
							<div class="card-header ">
								<h3 class="card-title">Ažuriraj Blog Objavu "{{$post->title}}"</h3>
									<form action="/post/{{$post->id}}"  method="POST" enctype="multipart/form-data">
										@method('PATCH')
										@csrf
							</div>
							<div class="card-body">
								<div class="form-group">
									<label class="form-label text-dark">Naziv </label>
									<input type="text" name="title" class="form-control" value="{{$post->title}}">
								</div>
							
								<div class="form-group">
									<label class="form-label text-dark">Kategorija</label>
									<select name ="cat_id" class="form-control custom-select">
										<option value="{{$post->cat_id}}">{{$post->cat_id}}</option>
							    	@foreach ($categories as $category)
							    	<option value="{{$category->id}}">{{$category->title}}</option>
							    	@endforeach
									</select>
								</div>
							
						
								<div class="form-group">
									<label class="form-label text-dark">Opis</label>
									<textarea class="form-control" name="body" rows="6" >{{$post->body}}</textarea>
								</div>
								<div class="form-group">
									<div class="custom-file">
										<input type="file" class="custom-file-input" name="cover_image">
										<label class="custom-file-label">Izaberite sliku</label>
									</div>
								</div>
							</div>
							<div class="card-footer ">
								<button type="submit" class="btn btn-primary btn-xs" id="uploadB">Izmeni</button>
							</div>
						</form>
						</div>
					</div>
				

				
				</div>
			</div>
		</section>
		<!--/Add posts-section-->




		@endsection