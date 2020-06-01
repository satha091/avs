<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
   protected  $fillable=['name', 'father_name','mother_name', 'address', 'date_of_birth', 'time_of_birth', 'birth_place', 'natchatram', 'laknam', 'rasi', 'photo', 'no_brothers', 'no_brothers_married', 'no_sisters', 'no_sisters_married', 'education', 'job', 'salary', 'caste', 'class', 'subcaste', 'father_kulam', 'mother_kulam', 'ancestry', 'dhosam', 'family_god', 'dhisa', 'dhisa_year', 'dhisa_month', 'dhisa_days', 'rasi_kattam_id', 'laknam_kattam_id'];
  // protected  $fillable=['name'];
}
