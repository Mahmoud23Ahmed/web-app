<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;

   protected $fillable = ['name', 'code' , 'departement_id'];

   public function departement(){
        return $this->hasOne(departement::class, 'id' , 'departement_id');
   }
}
