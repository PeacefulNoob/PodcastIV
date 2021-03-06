
@extends('layouts.app')

@section('content')


<section class="sptb">
    <div class="container">
        <div class="row ">

            <div class="col-lg-11 col-md-12 col-md-12 m-auto">
                <div class="item7-card-img m-auto">
                    <img src="/assets/images/epizoda/{{ $epizoda->image }}" alt="img" class="m-auto cover-image">
                </div>
                <div class="card my-3 ">
                    <div class="card-header ">
                        <h3 class="card-title">Ažuriraj Oglas "{{$epizoda->title}}"</h3>
                            <form action="/epizoda/{{$epizoda->id}}"  method="POST" enctype="multipart/form-data">
                                @method('PATCH')
                                @csrf
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <strong>   <label class="form-label text-dark">Naziv </label></strong>
                            <input type="text" name="title" class="form-control" value="{{$epizoda->title}}">
                        </div>
                        <div class="form-row pt-4">
                        <div class="form-group col-md-6">
                            <strong>     <label class="form-label text-dark">Broj Epizode</label></strong>
                            <input type="text" name="brojEpizode" class="form-control" placeholder="" value="{{$epizoda->brojEpizode}}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <strong>      <label class="form-label text-dark">Gost Epizode</label></strong>
                            <input type="text" name="gostEpizode" class="form-control" placeholder="" value="{{$epizoda->guest1}}"  >
                        </div>
                    </div>
                        <div class="form-group">
                            <strong>    <label class="form-label text-dark">Soundcloud </label></strong>
                            <input type="text" name="sc_url" class="form-control" value="{{$epizoda->sc_url}}">
                        </div>
                        <div class="form-row pt-4">

                        <div class="form-group col-md-6">
                            <strong>    <label class="form-label text-dark">Youtube </label></strong>
                            <input type="text" name="yt_url" class="form-control" value="{{$epizoda->yt_url}}">
                        </div>
                        <div class="form-group col-md-6">
                            <strong>    <label class="form-label text-dark">Sezona</label></strong>
                            <select name ="sezona_id" class="form-control custom-select">
                                <option value="{{$epizoda->sezona_id}}">{{$epizoda->sezona->title}}</option>
                        @foreach ($sezone as $sezona)
                        <option value="{{$sezona->id}}">{{$sezona->title}}</option>
                        @endforeach
                            </select>
                        </div>
                    
                    </div>
                        <div class="form-group">
                            <strong>   <label class="form-label text-dark">Opis</label></strong>
                            <textarea class="form-control" name="description" rows="6" >{{$epizoda->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image">
                                <label class="custom-file-label">Izaberite sliku</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <button type="submit" class="btn btn-primary btn-xs" >Izmeni</button>
                    </div>
                </form>
                </div>
            </div>
        

        
        </div>
    </div>
</section>
	@endsection