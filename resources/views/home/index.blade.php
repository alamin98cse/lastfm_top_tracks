@extends('layouts.master')

{{-- Page title --}}
@section('title')
   Search by Country
@parent

@stop


{{-- content --}}

@section('content')
   
    @include('bands.partial.search-error')

    <div class="masthead text-white text-center">

       <div class="overlay"></div>
      
        <div class="container">
       
          <div class="row">
           
           <div class="col-md-3"></div>
           
           <div class="col-md-6">
            <div class="col-xl-9 mx-auto">  <h1 align="left">Search your bands by country</h1> </div>

            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">

                <form method="post" action="/bands"  id="search-by-country-form">
                  
                   @csrf()
                    <div class="form-row">
                   
                      <div class="col-12 col-md-9 mb-2 mb-md-0">
                     
                        <input type="text" name="country" class="form-control form-control-lg" placeholder="Enter Country Name...">
                     
                      </div>
                    
                      <div class="col-12 col-md-3">
                     
                        <button type="submit" class="btn btn-md btn-primary">Search</button>
                     
                      </div>

                    </div>

                </form>

            </div>
            </div>
            <div class="col-md-3"></div> 

          </div>

        </div>

      </div>
@stop

@section('footer_scripts')

    <!-- page level js starts-->

    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" ></script>
  
    <script type="text/javascript" src="{{ asset('assets/js/index.js') }}"></script>

    <!--page level js ends-->

@stop  