<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class doctors extends Model
{
    use HasFactory;
    protected $table = 'doctor';

    protected $fillable = ['academicnum', 'Email' , 'password'];
    
}
