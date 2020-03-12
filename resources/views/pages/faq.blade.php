
@extends('layouts.mk')

@section('title')
Jasa Desain | Singgah  
@endsection

@section('content')
<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>FAQ</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->

<!--section start-->
<section class="faq-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="accordion theme-accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0"><button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Pertanyaan 1?</button></h5></div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore delectus consequatur et ipsum quos nisi excepturi, aut magnam dolorum illo molestias, quod adipisci vel quibusdam officia nihil asperiores odio nesciunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0"><button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Pertanyaan 2?</button></h5></div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias inventore rem mollitia vero facere corporis nobis! Sapiente temporibus obcaecati possimus placeat quasi nemo illum, modi deserunt inventore ea adipisci ab.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0"><button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Pertanyaan 3?</button></h5></div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, possimus cupiditate perferendis aliquam recusandae mollitia, dolore minima quaerat at sint odit iusto corrupti ad quibusdam illo, sunt magnam quod! Aspernatur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0"><button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Pertanyaan 4?</button></h5></div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error, cumque nam. Similique nemo quae minus quisquam numquam distinctio cupiditate ea odit eum ipsa alias itaque, animi voluptatem ad, tempora consequatur!</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0"><button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Pertanyaan 5?</button></h5></div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, voluptates facere. Iusto alias dolorem reiciendis quasi inventore voluptatum, incidunt ipsum. Maiores nemo illo similique autem! Numquam libero consectetur reprehenderit incidunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0"><button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Pertanyaan 6?</button></h5></div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi voluptate illum eveniet unde aliquid adipisci, officia a necessitatibus nostrum harum excepturi voluptatem, quibusdam natus pariatur deleniti. Perferendis soluta voluptatem laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->

@endsection