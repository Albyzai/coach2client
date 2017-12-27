@extends('layouts.master')


@section('title')
    <title>Coach 2 Client</title>
@endsection


@section('content')

<div class="row margin-bot-100">
    <div class="col-md-12">
        <div class="content-box big-box" style="background-image: url({{ asset('media/beforeafter.jpg') }});">
            <h1 class="heading white-text">VILDE FORVANDLINGER</h1>
            <h3 class="sub-heading white-text">Se før- og efter billeder af andre brugere</h3>
            <a href="#" class="cta-button col-md-5">Gå til GALLERI</a>
        </div>
    </div>
</div>

<div class="row margin-bot-100">
    <div class="col-md-6">
        <div class="content-box medium-box" style="background-image: url({{ asset('media/blackman.jpg') }});">
            <h3 class="heading white-text">BRUG FOR EN TRÆNINGSPLAN?</h3>
            <a href="#" class="cta-button col-md-5">Gå til SHOP</a>
        </div>
    </div>
    <div class="col-md-6 ">
        <div class="content-box medium-box" style="background-image: url({{ asset('media/apple.jpg') }});">
            <h3 class="heading white-text">BRUG FOR EN MADPLAN?</h3>
            <a href="#" class="cta-button col-md-5">Gå til SHOP</a>
        </div>
    </div>
</div>
@endsection