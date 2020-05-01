
@extends('layouts.cms-base')
@section('cmscontent')
<!-- Bread crumb and right sidebar toggle -->
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">FAQ</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">FAQ</a></li>
            <li class="breadcrumb-item active">List</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb and right sidebar toggle -->

<div class="card">
    <div class="card-body">
        <h4 class="card-title">FAQ</h4>
        <h6 class="card-subtitle">Form</h6>
        <form class="form-horizontal m-t-40" action="{{ isset($faq) ? route('cms.faq.update',$faq->id) : route('cms.faq.store') }}" method="POST">                            
            <div class="form-group">                
                <label>Urutan</label>                
                <input type="number" name="order" min="1" class="form-control" rows="2" value="{{ isset($faq) ? '$faq->order' : '' }}" placeholder="{{ isset($faq) ? $faq->order : '' }}">
            </div>
            <div class="form-group">                                                
                <label>Question</label>                
                <textarea name="question" class="form-control" rows="2" value="{{ isset($faq) ? '$faq->question' : '' }}">{{ isset($faq) ? $faq->question:''}}</textarea>
            </div>
            <div class="form-group">               
                <label>Answer</label>
                <textarea  name="answer" class="form-control" rows="4" value="{{ isset($faq) ? '$faq->answer' : '' }}">{{ isset($faq) ? $faq->answer:''}} </textarea>
            </div>
            
            <button type="submit" class="btn waves-effect waves-light btn-success">{{ isset($faq) ? 'Update' : 'Add' }}</button>            
            
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
