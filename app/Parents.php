<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $fillable=['name','father_name','date_of_birth','age','blood_group','photo','native_place','district',
    'ancestry','address','telephone','cellno','email','job_details','job_description','designation','company_name','company_address',
    'company_telephone','company_cellno','company_email','qualification','wife_name','wife_native_place',
    'wife_ancestry','no_male','no_female'];
}
