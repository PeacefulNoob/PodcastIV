@extends('layouts.app')

@section('content')

<!--User Dashboard-->
<section class="sptb my-5">
    <div class="container">
        <div class="row">

            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card mb-0">
                    <div class="card-header">
                        <h3 class="card-title">Moje Blog Objave</h3>
                    </div>
                    <div class="card-body">
                        <div class="ads-tabs">
                         
                            <div class="tab-content">
                                <div class="tab-pane active table-responsive border-top userprof-tab" id="tab1">
                                    <table class="table table-bordered table-hover mb-0 text-nowrap">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Blog Objava</th>
                                                <th>Kategorija</th>
                                                <th>Status</th>
                                                <th>Opcija</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($posts as $post)
                                                
                                         
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="#"></a>
                                                            <img src="/assets/images/post_images/{{$post->cover_image}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ml-4 p-0 mt-2">
                                                                <a href="#" class="text-dark">
                                                                    <h4 class="font-weight-semibold">{{$post->title}}</h4>
                                                                </a>
                                                                <a href="#"><i class="fa fa-clock-o mr-1"></i>
                                                                    {{$post->created_at}}</a><br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{-- {{$ad->$category->title}} --}}</td>
                                                <td>
                                                    <a href="#" class="badge badge-warning">Published</a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-success btn-sm text-white" href="/post/{{$post->id}}/edit " data-toggle="tooltip"
                                                        data-original-title="Edit"><i class="fa fa-pencil"></i></a>

                                                       
                                                        <form action="{{ route('post.destroy', $post->id)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">    <a class="btn btn-danger btn-sm text-white" data-toggle="tooltip"
                                                                data-original-title="Delete"><i class="fa fa-trash-o"></i></a></button>
                                                        </form>
                                                    <a class="btn btn-primary btn-sm text-white"  href="/post/{{$post->id}} " data-toggle="tooltip"
                                                        data-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
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
</section>
<!--User Dashboard-->
@endsection