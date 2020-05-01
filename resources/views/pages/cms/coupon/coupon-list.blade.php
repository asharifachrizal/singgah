
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
        <h6 class="card-subtitle">Data table</h6>
        <div class="table-responsive m-t-40">
            <table id="myTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Discount by Percent</th>                        
                        <th>Discount by Cash</th>

                    </tr>
                </thead>
                <tbody>
                @foreach ($coupons as $index => $row)
                    <tr>
                        <td>{{ $row->title }}</td>                        
                        <td>{{ $row->description }}</td>
                        <td>{{ $row->percent }}</td>                        
                        <td>{{ $row->cash }}</td>                        
                        <td>
                            <a href="{{ route('cms.coupon.form.update', $row->id)}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil"></i> </a>
                            <a href="{{ route('cms.coupon.delete', $row->id)}}" data-toggle="tooltip" data-original-title="Remove"> <i class="fa fa-trash-o text-danger"></i> </a>
                        </td>                        
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
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
