<div class="message-error">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
<div class="message-success">
    @if (isset($success))
        <div class="alert alert-danger">
            <ul>
                @foreach ($success->all() as $success)
                    <li>{{ $success }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>
        @if(session('success'))
        <div class="alert alert-success" role="alert">

        <h1>{{session('success')}}</h1>
    </div>

    @endif
{{-- //////////////////////////////////////// --}}

    @if(session()->has("succes"))
    <div class="alert alert-danger">  {{session()->get("success")}}</div>
    @endif

    @if(session()->has("error"))
        <div class="alert alert-danger">  
            {{session()->get("error")}}
        </div>
    @endif

