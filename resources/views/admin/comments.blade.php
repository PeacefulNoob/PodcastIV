@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-12 my-5">
            <div class="card mb-0">
                <div class="card-header">
                    <h3 class="card-title">Komentari</h3>
                </div>
                <div class="card-body">
                    <div class="ads-tabs">
                        <div class="tab-content">
                            <div class="tab-pane active table-responsive border-top userprof-tab" id="tab1">
                                <table class="table table-bordered table-hover mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Naziv</th>
                                            <th>Email </th>
                                            <th>Komentar</th>
                                            <th>Obrisi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($comments as $comment)
                                        <tr>
                                            <td>
                                                @php
                                                echo substr($comment->name, 0, 30);
                                            @endphp</h6>
                                            </td>
                                            <td>
                                                @php
                                                echo substr($comment->email, 0, 30);
                                            @endphp</h6>
                                            </td>
                                            <td>
                                            <p>@php
												
                                                echo substr($comment->body, 0, 100);
                                            @endphp...</p>
                                            
                                            </td>
                                            <td> 
                                                <a class="btn btn-danger btn-sm text-white" data-toggle="tooltip"
                                                      data-original-title="Delete">
                                                            <form action="{{ route('comments.destroy', $comment->id)}}" method="post">
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
