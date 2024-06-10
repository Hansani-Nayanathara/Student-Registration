<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Student extends Model
{
    use HasFactory,softDeletes;
/*
    protected $fillable = [
        'first_name' , 'last_name' , 'contact_nu' , 'address' , 'dob'
    ];*/
}
