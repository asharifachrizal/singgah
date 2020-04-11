
@extends('layouts.cms-base')
@section('cmscontent')
<!-- Bread crumb and right sidebar toggle -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Cart</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Cart</a></li>
            <li class="breadcrumb-item active">List</li>
        </ol>
    </div>   
</div>
<!-- End Bread crumb and right sidebar toggle -->  

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data Table</h4>
        <h6 class="card-subtitle">Data table example</h6>
        <div class="table-responsive m-t-40">
            <table id="myTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Cart Id</th>
                        <th>Customer Name</th>                        
                        <th>Entry Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                                                
                    </tr>
                </thead>
                <tbody>
                @foreach ($carts as $cart)                    
                    <tr>
                        <td>{{ $cart->id }}</td>
                        <td>{{ $cart->user->first_name }}</td>
                        <td>{{ $cart->created_at->toDateString() }}</td>
                        @if ($cart->status === 1)
                            <td><span class="label label-warning">Request Invoice</span> </td>
                            <td>
                                <a href="#" data-toggle="tooltip" data-original-title="Create Invoice"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>                                
                            </td>
                        @elseif ($cart->status === 2)
                            <td><span class="label label-info">Invoice Sent</span> </td>            
                            <td>                                
                                <a href="#" data-toggle="tooltip" data-original-title="Open Invoice"> <i class="fa fa-eye"></i> </a>
                            </td>
                        @elseif ($cart->status === 3)
                            <td><span class="label label-danger">Invoice Rejected</span> </td>            
                            <td>                                
                                <a href="#" data-toggle="tooltip" data-original-title="Open Invoice"> <i class="fa fa-eye"></i> </a>
                            </td>
                        @elseif ($cart->status === 4)
                            <td><span class="label label-green">Invoice Paid</span> </td>            
                            <td>                                
                                <a href="#" data-toggle="tooltip" data-original-title="Open Invoice"> <i class="fa fa-eye"></i> </a>
                            </td>
                        @endif
                        
                                                
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