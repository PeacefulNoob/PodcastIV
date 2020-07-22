
@extends('layouts.app')

@section('content')

<div class="col-xl-12 col-lg-12 col-md-12">
    <div class="card mb-0">
        <div class="card-header">
            <h3 class="card-title">Moje sezone</h3>
        </div>
        <div class="card-body">
            <div class="ads-tabs">
             
                <div class="tab-content">
                    <div class="tab-pane active table-responsive border-top userprof-tab" id="tab1">
                        <table class="table table-bordered table-hover mb-0 text-nowrap">
                            <thead>
                                <tr>
                                    <th>Naziv Sezone</th>
                                    <th>Opis</th>
                                    <th>Izmjeni</th>
                                    <th>Obrisi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sezone as $sezona)
                                    
                             
                                <tr>
                                    
                                    <td>
                                        <div class="media mt-0 mb-0">
                                            <div class="media-body">
                                                <div class="card-item-desc ml-4 p-0 mt-2">
                                                        <h4 class="font-weight-semibold">{{$sezona->title}}</h4>
                                              <i class="fa fa-clock-o mr-1"></i>
                                                        {{$sezona->created_at}}<br>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$sezona->description}}</td>
                                    <td><a href="/sezona/{{$sezona->id}}/edit "><button  class="btn btn-primary btn-xs" >Izmjeni</button></a></td>
                                    <td> 
                                        <a class="btn btn-danger btn-sm text-white" data-toggle="tooltip"
                                              data-original-title="Delete">
                                                    <form action="{{ route('sezona.destroy', $sezona->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                     
                                                        <button type="submit" class="btn btn-danger">   <i class="fa fa-trash-o"></i>  </button>
                                                    </form>
                                          </a></td>
                            
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
               
              
       
      
                </div>
            </div>
        </div>
    </div>
</div>
		<!--Add season-section-->
		<section class="sptb ">
			<div class="container">
				<div class="row ">

					<div class="col-lg-8 col-md-12 col-md-12 m-auto">
						<form action="{{ route('sezona.store')}}"  method="POST" enctype="multipart/form-data"   class="form-horizontal mb-0">
							@csrf
						<div class="card ">
							<div class="card-header ">
								<h3 class="card-title">Dodaj sezonu</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<label class="form-label text-dark">Naziv Sezone</label>
									<input type="text" name="title" class="form-control" placeholder="" required>
								</div>
						
							
						
								<div class="form-group">
									<label class="form-label text-dark">Opis sezone</label>
									<textarea class="form-control" name="description" rows="6"  required></textarea>
								</div>
							
							
							
							
							
							</div>
							<div class="card-footer ">
								<button type="submit" class="btn btn-primary btn-xs" id="uploadB">DODAJ</button>
							</div>
						</div>
					</form>
					</div>
				

				
				</div>
			</div>
		</section>
		<!--/Add season-section-->




		@endsection