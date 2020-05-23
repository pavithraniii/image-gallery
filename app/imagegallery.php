<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class imagegallery extends Model
{
     //table name
     protected $table ='image_gallery';
     //primarykey
     public $primarykey ='id';
     protected $fillable = ['title','image'];
     //timestamps
     public $timestamps =true;
}
