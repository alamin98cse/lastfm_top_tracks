<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

use Integration\Lastfm\Lastfm;

class bandsController extends Controller
{
       
      private $lastFM;

      public function __construct()
      {

           $this->lastFM = new Lastfm();
      }

      public function listBands(Request $request)
      {
      

          $country = strtoupper($request->get('country'));

          $page = $request->get('page') ? $request->get('page') : 1;

          $limit = $request->get('limit') ? $request->get('limit') : 5 ;

       	  $data = $this->lastFM->get('geo_getTopArtists',['country'=>$country,'page' => $page, 'limit' => $limit]);

          if(!isset($data['topartists']['artist']))
          {
             return view('home.index')->withErrors(['Error' => 'Please search with correct country name']);
          } 

       	  $bands = array();

       
       	  foreach ($data['topartists']['artist'] as $band) 
          {

         	  	 $thumbnail = '' ;
               /* Capture large image as band thumbnail */
               foreach ($band['image'] as $image) 
               {
         	  	 	   	  	 	
                    if($image['size'] == 'large') 
                    {
                    	$thumbnail = $image['#text'];
                      break;
                    }    

         	  	 }

         	  	 $bands[] = ['name' => $band['name'], 'thumbnail' => $thumbnail, 'mbid' => $band['mbid'] ];
       	  	 
       	  }
          
          $response_attr = $data['topartists']['@attr'] ;
         

           /* There is an issue with last.fm API. For some page number its not giving right response. This should be remove when the API issue would be fixed. */
          if(count($bands)>5) 
          {
              $bands = array_slice($bands, count($bands)-5 );
          }
         
         /* End API isue */      
         
         /* Pagination start */
       	  $pagi_start = isset($response_attr['page']) && $response_attr['page'] > 2 ?  $response_attr['page'] - 2 : 1 ;

       	  $pagi_end   = isset($response_attr['totalPages']) && $response_attr['totalPages'] > $limit ?  $response_attr['page'] + 2 : $response_attr['totalPages'] ;  
         
          /* Pagination end */

          $template =  $request->isMethod('post') ? 'bands.index' : 'bands.partial.band-list' ;

       	  return view($template,['bands' => $bands, 'pagination' => ['pagi_start' => $pagi_start, 'pagi_end' => $pagi_end, 'totalPages' => $response_attr['totalPages'], 'country' => $response_attr['country'], 'currentPage' => $response_attr['page'] ] ]);

      }  


   public function artistTopTracks(Request $request) 
   {
        
        /* Here I used default page size 50 without any pagination */
       
        $data = $this->lastFM->get('artist_getTopTracks',['mbid'=>$request->get('mbid')]);
      
        if(!isset($data['toptracks']['track']))
        {
            /* Error handle */
             return view('home.index')->withErrors(['Error' => 'The Artist is not available in Last.fm']);

        } 

        $tracks = array();     

        foreach ($data['toptracks']['track'] as $track) 
        {

             $thumbnail = '' ;
             /* Capture small image as track thumbnail */   
             foreach ($track['image'] as $image) 
             {
                        
                  if($image['size'] == 'small') 
                  {
                   
                     $thumbnail = $image['#text'];

                      break;
                  }    

             }
            
             $tracks[] = ['name' => $track['name'], 'thumbnail' => $thumbnail, 'playcount' => $track['playcount'], 'listeners' => $track['listeners'], 'url' => $track['url'] ];

       }

          return view('bands.toptracks',['tracks' => $tracks, 'artist' => $data['toptracks']['@attr']['artist'],'artist_image' => $request->get('image') ]);
      
   }  

}
