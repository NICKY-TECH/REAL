<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;
    protected $fillable=[
        'prices',
        'Number_of_rooms',
        'Additional_information',
        'user_id'

    ];

    public function owner(){
       return $this->belongsTo(Owner::class);
    }
}
