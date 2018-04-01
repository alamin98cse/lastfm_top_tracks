@extends('layouts.master')

{{-- Page title --}}
@section('title')
   Bands
@parent

@stop

{{-- content --}}
@section('content')
 
    <div class="container">
          
        <div class="text-center marbtm10">
     
            <h3 class="border-danger" style="text-align:left;"><span class="heading_border bg-danger" id="country_label">{{$pagination['country']}}</span>

                <form method="post" action="/bands"  id="search-by-country-form" style="width:300px;float:right;margin-top:-5px;margin-right: -75px;">

                        @csrf()
                 
                        <div class="col-12 col-md-9 mb-2 mb-md-0 input-group">
                            
                            <input type="text" name="country" class="form-control form-control-lg" placeholder="Enter Country Name...">
                            
                            <span class="input-group-btn">

                                <button id="btn-search" class="btn btn-info" type="submit"><i class="fa fa-search fa-fw"></i></button>

                            </span>

                    </div>
           
                </form>
          
            </h3>

        </div>
    
    </div>
    
    <div class="sliders">
        
        <div class="container"  id="band-list-perpage">
            <!-- List of bands -->
             @include('bands.partial.band-list')
            <!-- List of bands end -->            
        </div>

        <br><br>
        
    </div>

    <!-- Container End -->
@stop

{{-- footer scripts --}}       

@section('footer_scripts')

    <!-- page level js starts-->

    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" ></script>
  
    <script type="text/javascript" src="{{ asset('assets/js/index.js') }}"></script>

    <!--page level js ends-->

@stop      
