
@extends('layouts.cms-base')
@section('cmscontent')
<!-- Bread crumb and right sidebar toggle -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Coupon</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Coupon</a></li>
            <li class="breadcrumb-item active">List</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb and right sidebar toggle -->

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Coupon</h4>
        <h6 class="card-subtitle">Form</h6>
        <form class="form-horizontal m-t-40" action="{{ isset($coupon) ? route('cms.coupon.update',$coupon->id) : route('cms.coupon.store') }}" method="POST">                                        
            <div class="form-group">                                                
                <label>Title</label>                
                <input name="title" type="text" class="form-control" value="{{ isset($coupon) ? $coupon->title : '' }}" >                
            </div>            
            <div class="form-group">                                                
                <label>Description</label>                                
                <textarea name="description" class="form-control" rows="2" value="{{ isset($coupon) ? $coupon->description : '' }}" >{{ isset($coupon) ? $coupon->description : '' }}</textarea>
            </div>            
            <div class="form-group">                                                
                <label>Discount by Percent</label>                                                                
                <input type="number" max="100"  name="percent" class="form-control" value="{{ isset($coupon) ? $coupon->percent : '' }}" >                                
                <span class="font-13 text-muted">Discount 50%</span>
            </div>            
            <div class="form-group">                                                
                <label>Discount by Cash</label>                                                                
                <input type="number" min="0" name="cash" class="form-control" value="{{ isset($coupon) ? $coupon->cash : '' }}" >                                
                <span class="font-13 text-muted">Discount Rp. 50.000</span>
            </div>            
            <button type="submit" class="btn waves-effect waves-light btn-success">{{ isset($coupon) ? 'Update' : 'Add' }}</button>            
            
        </form>        
    </div>
</div>
@endsection


@section('scripts')
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
    $(document).ready(function() {
        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function(settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                        last = group;
                    }
                });
            }
        });
        // Order by the grouping
        $('#example tbody').on('click', 'tr.group', function() {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
    });
});
$('#example23').DataTable({
    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
});
</script>
@endsection
