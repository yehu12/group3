<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vote extends Model
{
    protected $table="candidates";
    protected $fillable=['fname','lname','gender','age','department','email','phone','year'];
}
