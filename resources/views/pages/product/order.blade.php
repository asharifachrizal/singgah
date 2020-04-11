@extends('layouts.mk-base')

@section('styles')
<!-- Bootstrap Switch CSS -->
<link rel="stylesheet" href="{{ asset('canvas/css/components/bs-switches.css') }}" type="text/css" />

<!-- Radio Checkbox Plugin -->
<link rel="stylesheet" href="{{ asset('canvas/css/components/radio-checkbox.css') }}" type="text/css" />

<link rel="stylesheet" href="{{ asset('canvas/css/responsive.css" type="text/css') }}" />
@endsection

@section('breadcumb')
<div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Order</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="index.html">Product</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
<section id="content ">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="postcontent margin-bottom">
                    <h3>Desain Order</h3>

                    <!-- form section -->
                    <form style="max-width: 35rem;">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="produk">Produk</label>
                            <select class="form-control" id="produk">
                                <option value="booklet">Booklet</option>
                                <option value="brosur">Brosur</option>
                                <option value="poster">Poster</option>
                                <option value="roll-banner-x-banner">Roll Banner/X-banner</option>
                                <option value="banner">Banner</option>
                                <option value="baliho">Baliho</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <select class="form-control" id="jenis">
                                <option value="landscape">Landscape</option>
                                <option value="potrait">Potrait</option>
                                <option value="horizontal">Horizontal</option>
                                <option value="vertikal">Vertikal</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kuantiti">Kuantiti</label>
                            <input class="form-control" type="number" id="kuantiti" name="kuantiti" min="1"/>
                        </div>
                        <div class="form-group">
                            <label for="ukuran-rasio">Ukuran/Rasio</label>
                            <input class="form-control" type="text" id="ukuran-rasio" name="ukuran-rasio" />
                        </div>
                        <h4>Design Tone</h4>
                        <div class="form-group">
                            <label for="warna">Warna</label>
                            <input class="form-control" type="text" id="warna" name="warna" />
                        </div>
                        <div class="form-group">
                            <label for="font-style">Font Style</label>
                            <input class="form-control" type="text" id="font-style" name="font-style" />
                        </div>
                        <div class="form-group">
                            <label for="color-grading">Color Grading</label>
                            <input class="form-control" type="text" id="color-grading" name="color-grading" />
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Design Style</label>
                            <div>
                                <input id="design-style01" value="simple" class="checkbox-style" name="design-style01" type="checkbox">
                                <label for="design-style01" class="checkbox-style-1-label">Simple</label>
                            </div>
                            <div>
                                <input id="design-style02" value="elegant" class="checkbox-style" name="design-style02" type="checkbox">
                                <label for="design-style02" class="checkbox-style-1-label">Elegant</label>
                            </div>
                            <div>
                                <input id="design-style03" value="vectorize" class="checkbox-style" name="design-style03" type="checkbox">
                                <label for="design-style03" class="checkbox-style-1-label">Vectorize</label>
                            </div>
                            <div>
                                <input id="design-style04" value="realism" class="checkbox-style" name="design-style04" type="checkbox">
                                <label for="design-style04" class="checkbox-style-1-label">Realism</label>
                            </div>
                            <div>
                                <input id="design-style05" value="animation" class="checkbox-style" name="design-style05" type="checkbox">
                                <label for="design-style05" class="checkbox-style-1-label">Animation</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="target-audience">Target Audience</label>
                            <input class="form-control" type="text" id="target-audience" name="target-audience" />
                        </div>
                        <div class="form-group">
                            <label for="objective-brief">Objective Brief</label>
                            <textarea class="form-control" id="objective-brief" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="deadline">Deadline</label>
                            <select class="form-control" id="deadline">
                                <option value="segera">Segera</option>
                                <option value="normal">Normal</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="output">Output</label>
                            <input class="form-control" type="text" id="output" name="output" />
                        </div>
                        <div class="form-group">
                            <label for="standart-pattern">Standart Pattern<br><span>refensi desain yang anda inginkan</span></label>
                            <input type="file" class="form-control-file" id="standart-pattern">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                    <!-- form section end -->
            </div>
        </div>
    </div>
</section>



@endsection

@section('scripts')
<script src="{{ asset('canvas/js/jquery.js') }}"></script>
<script src="{{ asset('canvas/js/plugins.js') }}"></script>
@endsection