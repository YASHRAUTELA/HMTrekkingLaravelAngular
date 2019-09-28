<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accomodation extends Model
{
    protected $fillable=['accomodation','rate','quantity'];

    public function booking(){
    	return $this->hasMany('App\Booking','accomodation_id','id');
    }
}
