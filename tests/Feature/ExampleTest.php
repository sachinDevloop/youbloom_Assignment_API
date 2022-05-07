<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Artist;
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
     public function test_create_artist()
    {
$postdata=[
    'band_name'=>'test',
    'genre'=>'classic',
    'location'=>'bhopal',
];

 $expected=['message' => 'Artist record created'];

       $this->json('POST',route('artist.createArtist'),$postdata)->assertStatus(201)->assertJson($expected);
    }



    
       public function test_view_artists()
    {
       

$this->get(route('artist.getAllArtist'))->assertStatus(200);
    }

     public function test_view_artist()
    {

  $artist = Artist::orderBy('likes', 'DESC')->where('band_name','test')->first();

$this->get(route('artist.getArtist',$artist->id))->assertStatus(200);
    }

      public function test_like_artist()
    {
          $artist = Artist::orderBy('likes', 'DESC')->where('band_name','test')->first();
$this->put(route('likeartist.likeartist',$artist->id))->assertStatus(200);
    }


      public function test_dislike_artist()
    {
          $artist = Artist::orderBy('likes', 'DESC')->where('band_name','test')->first();
$this->put(route('dislikeartist.dislikeartist',$artist->id))->assertStatus(200);
    }



   public function test_delete_artist()
    {
          $artist = Artist::orderBy('likes', 'DESC')->where('band_name','test')->first();
$this->delete(route('artist.deleteArtist',$artist->id))->assertStatus(202);
    }


}
