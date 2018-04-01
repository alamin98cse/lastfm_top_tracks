 <div class="row">
   
    <div class="col-md-1 col-sm-2 text-center wow zoomIn" data-wow-duration="3s" data-wow-delay="1.8s"></div>

        @foreach($bands as $band)
            
            <div class="col-md-2 col-sm-4 text-center wow zoomIn box" data-wow-duration="0.5s">
      
                <div class="text-center center-block">

                    <a href="/artist-toptracks?mbid={{$band['mbid']}}&image={{$band['thumbnail']}}" target="_blank"><img src="{{$band['thumbnail']}}" alt="{{$band['name']}}"  style="width:100%;" > </a>
                   
                    <div class="centered">{{$band['name']}}</div>
                   
                </div>
              
            </div>
    
        @endforeach  

    <div class="col-md-1 col-sm-2 text-center wow zoomIn" data-wow-duration="3s" data-wow-delay="1.8s"></div>

  </div>
  
  <!-- Pagination start -->
  <div style="float:left">
  
      <ul id="pagin" data-total="{{$pagination['totalPages']}}">
    
         <li><a data-page="{{$pagination['currentPage']-1}}"><<</a></li>
    
           @for($i=$pagination['pagi_start'];$i<=$pagination['pagi_end'];$i++)
                 
                   @if($i==$pagination['currentPage'])
                      <li><a class="current" data-page="{{$i}}">{{$i}}</a></li>
                   @else
                      <li><a  data-page="{{$i}}">{{$i}}</a></li>
                   @endif 

           @endfor        

           @if($pagination['pagi_end']+10<$pagination['totalPages'])

              <li>...</li>

              <li><a data-page="{{$pagination['pagi_end']+10}}" >{{$pagination['pagi_end']+10}}</a></li>

           @endif

           <li><a  data-page="{{$pagination['currentPage']+1}}">>></a></li>

      </ul>

  </div>

  <!-- Pagination end -->