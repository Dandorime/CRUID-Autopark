<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autopark extends Model
{
    use HasFactory;
    protected $fillable = ['Moodel','num','status','mileage','latest_maintenance'];
}
