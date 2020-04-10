@extends('layouts.cms-base')
@section('cmscontent')
<!-- Bread crumb and right sidebar toggle -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
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
        

        <div class="row">
            <div class="col-md-12">
                <strong>Brief URL</strong>
                <br>
                <a href="https://www.visiprop.com" target="_blank" >visiprop.com</a>
            </div>
        </div>

    </div>

    

</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->

<!-- Start Invoice Content -->
<div class="row">
    <div class="col-md-12">
        <div class="card card-body printableArea">
            <h3><b>INVOICE</b> <span class="pull-right">#5669626</span></h3>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left">
                        <address>
                            <h3> &nbsp;<b class="text-danger">Material Pro Admin</b></h3>
                            <p class="text-muted m-l-5">E 104, Dharti-2,
                                <br/> Nr' Viswakarma Temple,
                                <br/> Talaja Road,
                                <br/> Bhavnagar - 364002</p>
                        </address>
                    </div>
                    <div class="pull-right text-right">
                        <address>
                            <h3>To,</h3>
                            <h4 class="font-bold">Gaala & Sons,</h4>
                            <p class="text-muted m-l-30">E 104, Dharti-2,
                                <br/> Nr' Viswakarma Temple,
                                <br/> Talaja Road,
                                <br/> Bhavnagar - 364002</p>
                            <p class="m-t-30"><b>Invoice Date :</b> <i class="fa fa-calendar"></i> 23rd Jan 2017</p>
                            <p><b>Due Date :</b> <i class="fa fa-calendar"></i> 25th Jan 2017</p>
                        </address>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="table-responsive m-t-40" style="clear: both;">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Description</th>
                                    <th class="text-right">Quantity</th>
                                    <th class="text-right">Unit Cost</th>
                                    <th class="text-right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Milk Powder</td>
                                    <td class="text-right">2 </td>
                                    <td class="text-right"> $24 </td>
                                    <td class="text-right"> $48 </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="pull-right m-t-30 text-right">
                        <p>Sub - Total amount: $13,848</p>
                        <p>vat (10%) : $138 </p>
                        <hr>
                        <h3><b>Total :</b> $13,986</h3>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <div class="text-right">
                        <button class="btn btn-info" type="submit"> Save </button>
                        <button class="btn btn-danger" type="submit"> Send Invoice to Customer </button>
                        <!-- <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Invoice Content -->
@endsection






        