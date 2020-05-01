@extends('layouts.client-base')

@section('breadcumb')
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ asset('canvas/images/parallax/6.jpg') }}'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">

    <div class="container clearfix center">
        <h1>FAQ</h1>
        <span>All your Questions answered in one place.</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">FAQ</li>
        </ol>
    </div>

</section>
@endsection

@section('content')
<div class="content-wrap">

    <div class="container clearfix">

        <!-- Post Content
        ============================================= -->
        <div class="">

            <div id="faqs" class="faqs">

                <div id="faqs-list" class="fancy-title title-bottom-border">
                    <h3>Some of your Questions:</h3>
                </div>

                
                <ul class="iconlist faqlist">
                    @foreach($faqs as $row)
                        <li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#{{$row->order}}">{{ $row->question }}</a></strong></li>                    
                    @endforeach
                    
                </ul>

                @foreach($faqs as $row)
                    <!-- start item -->
                    <div class="divider"><i class="icon-circle"></i></div>
                    <h3 id="{{$row->order}}"><strong>Q.</strong>{{ $row->question }}</h3>
                    <p>{{ $row->answer }}</p>

                    <div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

                    <!-- end item -->                       
                @endforeach

                       

                

            </div>

        </div><!-- .postcontent end -->

        
    </div>

</div>
@endsection