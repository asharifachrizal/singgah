@extends('layouts.app')

@section('content')

<div class="oxy-section oxy-color-primary">
    <div class="oxy-section__background oxy-section__background--bottom-align oxy-background-parallax">
        <img src="{{ asset('fab/images/backgrounds/bg26-notinclude.jpg') }}" alt="section background">
    </div>
    <div class="oxy-section__content">
        <div class="mdl-grid mdl-grid--no-fullwidth">
            <div class="oxy-margin-top-150 oxy-margin-bottom-300 "></div>
        </div>
    </div>
</div>

<div class="oxy-section oxy-margin-top--300">
    <div class="oxy-section__content">

        <div class="mdl-grid mdl-grid--no-fullwidth oxy-margin-bottom-40 ">

            <!-- Post Offset -->
            <div class="mdl-cell mdl-cell--3-col mdl-cell--1-col-tablet"></div>

            <!-- Post  -->
            <div class="mdl-cell mdl-cell--6-col  mdl-cell--6-col-tablet mdl-typography--text-center">

                <h1 class="oxy-bigtext">
                    <span class="oxy-color-light mdl-typography--font-thin">900</span>
                </h1>

                <p class="oxy-margin-top-40 mdl-typography--display-1 mdl-typography--font-light">
                    Fitur sedang dalam tahap pengembangan :)
                </p>
                <a href="{{ route('home') }}" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary oxy-margin-bottom-100">
                    Kembali ke Halaman Awal
                </a>

            </div>
        </div>
    </div>
</div>

@endsection