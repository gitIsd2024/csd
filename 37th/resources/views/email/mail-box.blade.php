@extends('dashboard.index')

@section('styles')
    <style>
      
    </style>
@endsection

@section('content')


<div class="component-section no-code">
    <h5 id="section1" class="tx-semibold">Ugnay Palay Mail Box</h5>
    {{-- <p class="mg-b-25">This is a demo of a required field that must not leave empty.</p> --}}

    <table
          class="table table-hover table-striped table-bordered"
          id="transaction_tbl"
        >
          <thead>
            <th>User Name</th>
            <th>E-mail</th>
         {{--    <th>Message</th> --}}
            <th>Status</th>
            <th>Code</th>
            <th>Date Sent</th>
          </thead>
          <tbody></tbody>
        </table>
       
</div><!-- component-section -->




{{-- <script src="{{ asset('lib/jquery2/jquery.min.js"></script> --}}
<script src="{{asset('lib/select2/js/jquery.min.js')}}"></script>
<script src="{{ asset('lib/select2/js/select2.min.js')}}"></script>
<script src="{{ asset('js/DataTables/datatables.min.js')}}"></script>
<script src="{{ asset('lib/cdn/sweetalert.mini.js')}}"></script>
<script src="{{ asset('lib/cdn/sweetalert.mini2.js')}}"></script>

<script>

$( document ).ready(function() {
  $("#transaction_tbl").DataTable().clear();
    $("#transaction_tbl").DataTable({
      bDestroy: true,
      autoWidth: false,
      searchHighlight: true,
      processing: true,
      serverSide: true,
      orderMulti: true,
      order: [],
      ajax: {
        url: "{{ route('getTransactionData') }}",
        dataType: "json",
        type: "POST",
        data: {
          _token: "{{ csrf_token() }}",

        },
      },
      columns: [
        { data: "username" },
        { data: "email" },
        /* { data: "message" }, */
        { data: "status" },
        { data: "code" },
        { data: "date_created" },
      ],
    });
    
  });







</script>



@endsection()