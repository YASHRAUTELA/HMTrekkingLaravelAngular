<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable=['person_name','from_date','to_date','accomodation_id','user_id'];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function accomodation(){
    	return $this->belongsTo('App\Accomodation');
    }
}