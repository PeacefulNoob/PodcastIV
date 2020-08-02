
@extends('layouts.app')

@section('content')


		<!--Add ep-section-->
		<section class="sptb">
			<div class="container">
				<div class="row ">

					<div class="col-lg-10 col-md-12 col-md-12 m-auto">
						<form action="{{ route('epizoda.store')}}"  method="POST" enctype="multipart/form-data"  id="commentForm"  class="form-horizontal mb-0">
							@csrf
						<div class="card ">
							<div class="card-header ">
								<h3 class="card-title">Dodaj epizodu</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<strong>   <label class="form-label text-dark">Naziv </label></strong>
									<input type="text" name="title" class="form-control" value="">
								</div>
								<div class="form-row pt-4">
								<div class="form-group col-md-6">
									<strong>     <label class="form-label text-dark">Broj Epizode</label></strong>
									<input type="text" name="brojEpizode" class="form-control" placeholder="" value="" required>
								</div>
								<div class="form-group col-md-6">
									<strong>      <label class="form-label text-dark">Gost Epizode</label></strong>
									<input type="text" name="gostEpizode" class="form-control" placeholder="" value=""  >
								</div>
							</div>
								<div class="form-group">
									<strong>    <label class="form-label text-dark">Soundcloud </label></strong>
									<input type="text" name="sc_url" class="form-control" value="">
								</div>
								<div class="form-row pt-4">
		
								<div class="form-group col-md-6">
									<strong>    <label class="form-label text-dark">Youtube </label></strong>
									<input type="text" name="yt_url" class="form-control" value="">
								</div>
								<div class="form-group col-md-6">
									<strong>    <label class="form-label text-dark">Sezona</label></strong>
									<select name ="sezona_id" class="form-control custom-select">
										<option value="0">Izaberi</option>
								@foreach ($sezone as $sezona)
								<option value="{{$sezona->id}}">{{$sezona->title}}</option>
								@endforeach
									</select>
								</div>
							
							</div>
								<div class="form-group">
									<strong>   <label class="form-label text-dark">Opis</label></strong>
									<textarea class="form-control" name="description" rows="6" ></textarea>
								</div>
								<div class="form-group">
									<div class="custom-file">
										<input type="file" class="custom-file-input" name="image">
										<label class="custom-file-label">Izaberite sliku</label>
									</div>
								</div>
							</div>
							<div class="card-footer ">
								<button type="submit" class="btn btn-primary btn-xs" >Dodaj</button>
							</div>
					</form>
					</div>
				

				
				</div>
			</div>
		</section>
		<!--/Add ep-section-->




		@endsection