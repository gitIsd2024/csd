    
    @if(Route::current()->getName() != 'email.view' && Route::current()->getName() != 'registration')
    <script src="{{ asset('lib/jquery/jquery.min.js')}}"></script>
       
    @endif

   
    
    @if (Route::current()->getName() !="registration")
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('lib/feather-icons/feather.min.js')}}"></script>
    <script src="{{ asset('lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('lib/js-cookie/js.cookie.js')}}"></script>
    <script src="{{ asset('lib/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('lib/jquery.flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ asset('lib/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('lib/jquery.flot/jquery.flot.threshold.js')}}"></script>
    <script src="{{ asset('lib/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('lib/jqvmap/maps/jquery.vmap.world.js')}}"></script>

    <script src="{{ asset('assets/js/cassie.js')}}"></script>
    <script src="{{ asset('assets/js/flot.sampledata.js')}}"></script>
    <script src="{{ asset('assets/js/vmap.sampledata.js')}}"></script>
    <script src="{{ asset('assets/js/dashboard-one.js')}}"></script>

    <script src="{{ asset('lib/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('lib/datatables.net-dt/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{ asset('lib/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js')}}"></script>
        
    @endif
  
    {{-- <script src="/csd/public/lib/select2/js/select2.full.min.js"></script> --}}
  


    <script>
        $( document ).ready(function() {            
            setTimeout(function() { 
                $('.loader').hide();
            }, 500);
        });
    </script>
