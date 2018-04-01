 <!-- Error message -->
 @if($errors->any())

       <div class="alert-danger" data-wow-duration="5.5s"><h4 align="center">{{$errors->first()}}</h4></div>
       
 @endif