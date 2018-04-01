<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ArtistsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    
    public function testBandByCountry()
    {
        // $response = $this->call('post', 'http://lastfm.loc/bands', ['country' => 'spain']) ;
          
         $response =$this->json('POST', '/bands', ['country' => 'spain']);
                 
         $this->assertNotEmpty($response);

 		 $response->assertStatus(200);
      	   

         $response->assertSee('Spain');
         
         $response->assertSeeInOrder(['sliders','band-list-perpage','pagin','footer']);
         
    }
    
    public function testException()
    {
                 
         $response =$this->json('POST', '/bands', ['country' => 'sdfdsfsdfs']);
                 
         $response->assertSee('Please search with correct country name');
         
    }  
    
    public function testPaginate()
    {
    	 $response =$this->json('GET', '/bands-perpage', ['country' => 'spain','page'=>4,'limit' => 5]);
         
         $response->assertSeeInOrder(['current','data-page','4','4']); 
    	 
    }   
   

}
