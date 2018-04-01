@extends('layouts.master')

{{-- Page title --}}
@section('title')
   Top Tracks - {{$artist}}
@parent

@stop

{{-- content --}}
@section('content') 

    <div class="container">
          
        <div class="text-center marbtm10">
        
             <img src="{{$artist_image}}" style="width:30%;">
            
                <h3 class="border-danger" style="text-align:left;">
              
                    <span class="heading_border bg-danger" id="country_label">{{$artist}}</span>
                
                </h3>

        </div>

    </div>
     
    <div class="sliders">
    
        <div class="container">
    
           @foreach($tracks as $key => $track)
              
                @if($key%4==0)             
                  <div class="row">
                @endif

                <div class="col-md-3 col-sm-6 text-center wow zoomIn toptrackbox" data-wow-duration="1.5s">
                
                    <div class="text-center center-block col-md-4">

                        <img src="{{$track['thumbnail']}}" alt="{{$track['name']}}"  style="width:100%;" > 
                                    
                    </div>

                    <div class="col-md-8">
                        
                        <span><strong><a href="{{$track['url']}}" target="_blank">{{$track['name']}}</a></strong></span>
                        
                        <span>Play Count - {{$track['playcount']}}</span>
                        
                        <span>Listeners - {{$track['listeners']}} </span>

                    </div>
              
                </div>

                 @if(($key+1)%4==0)
                     </div>
                 @endif

           @endforeach  
        
        </div>
        
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
