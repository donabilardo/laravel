<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    use HasFactory;


    protected $table = 'layouts';
    protected $connection ='mysql';
    protected $fillable = ['name','age'];
}
