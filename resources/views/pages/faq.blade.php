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

                <!-- start item -->
                <ul class="iconlist faqlist">
                    <li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#faq-1">What is Singgah?</a></strong></li>                    
                    <li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#faq-2">Question 2?</a></strong></li>                    
                    <li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#faq-3">Question 3?</a></strong></li>                    
                </ul>

                <div class="divider"><i class="icon-circle"></i></div>

                <h3 id="faq-1"><strong>Q.</strong> How do I become an author?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates 
                doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat 
                aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</p>

                <div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

                <!-- end item -->

                <!-- start item -->                

                <div class="divider"><i class="icon-circle"></i></div>

                <h3 id="faq-2"><strong>Q.</strong>Question 2?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates 
                doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat 
                aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</p>

                <div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

                <!-- end item -->

                <!-- start item -->                

                <div class="divider"><i class="icon-circle"></i></div>

                <h3 id="faq-3"><strong>Q.</strong>Question 3?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates 
                doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat 
                aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</p>

                <div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

                <!-- end item -->
                

            </div>

        </div><!-- .postcontent end -->

        
    </div>

</div>
@endsection