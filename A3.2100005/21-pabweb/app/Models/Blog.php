<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    /** 
    * filllable
    *
    * @var array
    */

    protected $fillable = ['image','title','content'];
}
