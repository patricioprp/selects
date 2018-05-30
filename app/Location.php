<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';
    protected $fillable = ['name','town_id'];

    public static function locations($id){
      return Location::where('town_id','=',$id)
      ->get();
    }
}
