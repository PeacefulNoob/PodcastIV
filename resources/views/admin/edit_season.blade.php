
@extends('layouts.app')

@section('content')


		<!--Add season-section-->
		<section class="sptb ">
			<div class="container">
				<div class="row ">

					<div class="col-lg-8 col-md-12 col-md-12 m-auto">
						<form action="/sezona/{{$sezona->id}}"  method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
						<div class="card ">
							<div class="card-header ">
								<h3 class="card-title">Izmjeni sezonu</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<label class="form-label text-dark">Naziv Sezone</label>
                                <input type="text" name="title" class="form-control" value="{{$sezona->title}}" required>
								</div>
						
							
						
								<div class="form-group">
									<label class="form-label text-dark">Opis sezone</label>
									<textarea class="form-control" name="description" rows="6"  required>{{$sezona->description}}</textarea>
								</div>
							
							
							
							
							
							</div>
							<div class="card-footer ">
								<button type="submit" class="btn btn-primary btn-xs" >Izmjeni</button>
							</div>
						</div>
					</form>
					</div>
				

				
				</div>
			</div>
		</section>
		<!--/Add season-section-->




		@endsection