<?php

namespace Tests\Unit;

use Tests\TestCase;
class youbloomTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
 public function test_create_artist()
    {
$postdata=[
    'band_name'=>'sachin patil',
    'genre'=>'classic',
    'location'=>'bhopal',
];

 $expected=['message' => 'Artist record created', 'message' => 'Doublicate Artist\'s Entry!',];

       $this->json('POST',route('artist.createArtist'),$postdata)->assertStatus(200)->assertJson($expected);
    }


public function test_view_artist()
    {


$this->get(route('artist.getAllArtist'))->assertStatus(200);
    }

}
