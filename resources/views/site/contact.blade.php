@extends('layouts.main')
@section('head_index')

	<!-- META DATA -->
    <title>Igor i Vlado Podcast | Poslovna Saradnja</title>

    <meta name="description" content="Igor i Vlado Podcast | Poslovna Saradnja">
    <meta name="author" content="QQRIQ PeacefulNoob">
    <meta name="keywords" content="Igor i Vlado Podcast">
    
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <meta property="og:image" content="https://igorivlado.com/assets/images/shareOg.png" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://igorivlado.com/contact" />
    <meta property="og:title" content="Igor i Vlado Podcast | Poslovna Saradnja" />
    <meta property="og:description" content="Igor i Vlado Podcast | Poslovna Saradnja" />
    
    @endsection
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
            <div class="wrap-input100 ">
                <div class="g-recaptcha" data-sitekey="6Leut7oZAAAAABa5OtweVjuhOWRe2CMx6fE9CMS0"></div>

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