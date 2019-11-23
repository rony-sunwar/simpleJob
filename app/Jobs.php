<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $fillable =[

      'job_title','job_description','salary','location','country'
    ];
}
