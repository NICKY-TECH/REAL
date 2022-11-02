<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable=[
        'Name',
        'Facebook_Account',
        'Phone_Number',
        'Twitter_Account',
        'Linkedln',
        'Gmail_Account',
        'Office_Address'
        ];

public function buildings(){
         return $this->hasMany(Building::class);
     }

}


