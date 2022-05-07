<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Artist;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


//create artist//
     public function createArtist(Request $request) {
try{
         $artist = new Artist;
    $artist->band_name = $request->band_name;
    $artist->genre = $request->genre;
     $artist->location = $request->location;
    
    $artist->save();

    return response()->json([
        "message" => "Artist record created"
    ], 201);
}
    catch (\Illuminate\Database\QueryException $e){
    $errorCode = $e->errorInfo[1];
    if($errorCode == 1062){
        // houston, we have a duplicate entry problem
        return response()->json([
        "message" => "Doublicate Artist's Entry!"
    ]);
    }

    }

}
//end create artist//


//get all artist with likes DESC//
public function getAllArtist() {
    $artist = Artist::orderBy('likes', 'DESC')->get()->toJson(JSON_PRETTY_PRINT);
    return response($artist, 200);
  }
//end get all artist with likes DESC//


//get single artist with id//
public function getArtist($id) {
    if (Artist::where('id', $id)->exists()) {
        $artist = Artist::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
        return response($artist, 200);
      } else {
        return response()->json([
          "message" => "Artist not found"
        ], 404);
      }
  }
//end get single artist with id//

//delete artist with id//
   public function deleteArtist ($id) {

      if(Artist::where('id', $id)->exists()) {
        $artist = Artist::find($id);
        $artist->delete();

        return response()->json([
          "message" => "Records deleted"
        ], 202);
      } else {
        return response()->json([
          "message" => "Artist not found"
        ], 404);
      }
    }
//end delete artist with id//

//increment like artist with id//
 public function likeartist ($id) {
    if (Artist::where('id', $id)->exists()) {
        $artist = Artist::find($id);
        //dd($artist->likes);
        $count=$artist->likes+1;
        $artist->likes = is_null($count) ? $artist->likes : $count;
       
        $artist->save();

        return response()->json([
            "message" => "Artist Likes Increment!"
        ], 200);
        } else {
        return response()->json([
            "message" => "Artist not found"
        ], 404);
        
    }
}
//end increment like artist with id//


//increment dislike artist with id//
public function dislikeartist ($id) {
    if (Artist::where('id', $id)->exists()) {
        $artist = Artist::find($id);
        //dd($artist->likes);
        $count=$artist->dislikes+1;
        $artist->dislikes = is_null($count) ? $artist->dislikes : $count;
       
        $artist->save();

        return response()->json([
            "message" => "Artist DisLikes Increment!"
        ], 200);
        } else {
        return response()->json([
            "message" => "Artist not found"
        ], 404);
        
    }
}
//end increment dislike artist with id//

}
