<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Child extends Model
{
     protected $table = 'childs';
    protected $fillable=['name','date_of_birth','education','marital_status','parent_id','relationship_id'];

    public function parent(){
        return $this->belongsTo('App\Parents');
    }
}
