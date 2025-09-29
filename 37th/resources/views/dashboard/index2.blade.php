@extends('dashboard.index3')

@section('styles')
    <style>
   

    </style>
@endsection

@section('content')




<div class="component-section no-code">
    <h1 id="section1" class="tx-semibold">Ugnay Palay Daily Monitoring</h1>
        <div class="row">
          <div class="col-md-3">
          <label for="" style="font-size:35px">First Day Attendees</label>
          <div class="rectangle">{{$result->day1}}</div>
          </div>

          <div class="col-md-3">
          <label for="" style="font-size:35px">Second Day Attendees</label>
          <div class="rectangle">{{$result->day2}}</div>
          </div>

          <div class="col-md-3">
          <label for="" style="font-size:35px">Third Day Attendees</label>
          <div class="rectangle">{{$result->day3}}</div>
          </div>

          <div class="col-md-3">
          <label for="" style="font-size:35px">Fourth Day Attendees</label>
          <div class="rectangle">{{$result->day4}}</div>
          </div>
    </div>
  
        
        
</div><!-- component-section -->








<script>

  $( document ).ready(function() {
    

  });

</script>





@endsection()