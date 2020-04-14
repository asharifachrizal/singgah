@extends('layouts.cms-base')
@section('cmscontent')
<!-- Bread crumb and right sidebar toggle -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Order</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Order</a></li>
            <li class="breadcrumb-item active">Detail</li>
        </ol>
    </div>   
</div>
<!-- End Bread crumb and right sidebar toggle -->  
                
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="card">
    <div class="card-header">
        Brosur
        <div class="card-actions">
            <a class="" data-action="collapse"><i class="ti-plus"></i></a>
            <!-- <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
            <a class="btn-close" data-action="close"><i class="ti-close"></i></a> -->
        </div>
    </div>
    <div class="card-body collapse">
        <h4 class="card-title">Special title treatment</h4>
        
        <div class="row">
            <div class="col-md-6 ">
                <div class="form-group">
                    <label>Deadline</label>
                    <input type="date" class="form-control" disabled>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" class="form-control" value="1" disabled>
                </div>               
            </div>
        </div>
        <!--/row-->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Size/Ration</label>
                    <input type="text" class="form-control" value="1" disabled>
                </div>               
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Orientation</label>
                    <input type="text" class="form-control" disabled>
                </div>  
            </div>
        </div>
        <!--/row-->
        <div class="row">
            
            <div class="col-md-6">
                <div class="form-group">
                <div class="card">
                    <div class="card-header">
                        Color
                        <div class="card-actions">
                            <a class="" data-action="collapse"><i class="ti-plus"></i></a>
                        </div>
                    </div>
                    <div class="card-body collapse">
                        <!-- <h4 class="card-title">Special title treatment</h4> -->
                        <p class="card-text">#FFFFFF</p>
                        <p class="card-text">#FFFFFF</p>
                        <p class="card-text">#FFFFFF</p>                        
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <div class="card">
                    <div class="card-header">
                        Color Grading
                        <div class="card-actions">
                            <a class="" data-action="collapse"><i class="ti-plus"></i></a>
                        </div>
                    </div>
                    <div class="card-body collapse">
                        <p class="card-text">#FFFFFF</p>
                        <p class="card-text">#FFFFFF</p>
                        <p class="card-text">#FFFFFF</p>
                                         
                    </div>
                </div>
                </div>
            </div>
            
        </div>

        <div class="row">
            
            <div class="col-md-6">
                <div class="form-group">
                <div class="card">
                    <div class="card-header">
                        Font Style
                        <div class="card-actions">
                            <a class="" data-action="collapse"><i class="ti-plus"></i></a>
                        </div>
                    </div>
                    <div class="card-body collapse">
                        <!-- <h4 class="card-title">Special title treatment</h4> -->
                        <p class="card-text">Arial</p>                        
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <div class="card">
                    <div class="card-header">
                        Target Audience
                        <div class="card-actions">
                            <a class="" data-action="collapse"><i class="ti-plus"></i></a>
                        </div>
                    </div>
                    <div class="card-body collapse">
                        <p class="card-text">Anak Muda</p>                        
                                         
                    </div>
                </div>
                </div>
            </div>
            
        </div>
        
        <div class="row">            
            <div class="col-md-6">
                <div class="form-group">
                <div class="card">
                    <div class="card-header">
                        Output File
                        <div class="card-actions">
                            <a class="" data-action="collapse"><i class="ti-plus"></i></a>
                        </div>
                    </div>
                    <div class="card-body collapse">
                        <!-- <h4 class="card-title">Special title treatment</h4> -->
                        <p class="card-text">JPEG, PNG</p>                        
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <div class="card">
                    <div class="card-header">
                        Pattern/Reference
                        <div class="card-actions">
                            <a class="" data-action="collapse"><i class="ti-plus"></i></a>
                        </div>
                    </div>
                    <div class="card-body collapse">
                        <p class="card-text">BUMN</p>
                        <p class="card-text">Poster Game</p>                        
                                         
                    </div>
                </div>
                </div>
            </div>
        </div>
        
        <!--/row-->
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Price</label>
                    <input type="number" class="form-control" value="1" name="price">
                </div>               
            </div>            
        </div>
        <!--/row-->

        

    </div>

    

</div>

<button onclick="window.location.href = '{{ route('cms.invoice')}}'" type="button" class="btn waves-effect waves-light btn-info">Invoice</button>


<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->


@endsection






        