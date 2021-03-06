@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-12 my-5">
            <div class="card mb-0">
                <div class="card-header">
                    <h3 class="card-title">Moje Epizode</h3>
                </div>
                <div class="card-body">
                    <div class="ads-tabs">
                        <div class="tab-content">
                            <div class="tab-pane active table-responsive border-top userprof-tab" id="tab1">
                                <table class="table table-bordered table-hover mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Broj Ep</th>
                                            <th>Naziv Epizode</th>
                                            <th>Opis Epizode</th>
                                            <th>Izmjeni</th>
                                            <th>Obrisi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($epizode as $epizoda)
                                            
                                     
                                        <tr>
                                      
                                        <td>{{$epizoda->brojEpizode}}</td>
                                            <td>
                                                <div class="media mt-0 mb-0">
                                                    <div class="card-aside-img">
                                                        <a href="#"></a>
                                                        <img src="/assets/images/epizoda/{{$epizoda->image}}" alt="img">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="card-item-desc ml-4 p-0 mt-2">
                                                                <h6 class="font-weight-semibold">
                                                                    @php
												
                                                echo substr($epizoda->title, 0, 30);
                                            @endphp</h6>
                                                      <i class="fa fa-clock-o mr-1"></i>
                                                                {{$epizoda->created_at}}<br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                            <p>@php
												
                                                echo substr($epizoda->description, 0, 50);
                                            @endphp...</p>
                                            
                                            </td>
                                            <td><a href="/epizoda/{{$epizoda->id}}/edit "><button  class="btn btn-primary btn-xs" >Izmjeni</button></a></td>
                                            <td> 
                                                <a class="btn btn-danger btn-sm text-white" data-toggle="tooltip"
                                                      data-original-title="Delete">
                                                            <form action="{{ route('epizoda.destroy', $epizoda->id)}}" method="post">
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
    </div>
</div>
@endsection
