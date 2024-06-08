<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inputs extends Model
{
    use HasFactory;



    protected $table = 'inputs';
    protected $connection ='mysql';
//    protected $fillable = ['name','age'];
}
