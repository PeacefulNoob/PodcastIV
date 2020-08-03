@extends('layouts.main')
@section('content')
<link href="/assets/css/mainContact.css" rel="stylesheet" />
<link href="/assets/css/utilContact.css" rel="stylesheet" />
@include('layouts.messages')

<div class="container-contact100">

    <div class="wrap-contact100">
        <form action="{{route('contact.store.main')}}" method="post"   class="contact100-form validate-form">   {{ csrf_field() }}
            <span class="contact100-form-title">
                POSLOVNA SARADNJA
            </span>

            <div class="wrap-input100 validate-input" data-validate="Unesite ime i prezime">
                <input class="input100" type="text" name="name" placeholder="Vaše ime i prezime">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Unesite E-mail">
                <input class="input100" type="text" name="email" placeholder="Vaša e-mail adresa">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Unesite naslov poruke">
                <input class="input100" type="text" name="subject" placeholder="Vaš naslov poruke">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Unesite poruku">
                <textarea class="input100" name="message" placeholder="Vaša poruka"></textarea>
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
                    <span>
                        <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
                        Send
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>

@endsection