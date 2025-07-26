<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['Name','Company','Email','Phone','Interestedservices','InterestedQs','ChooseaBudgetUSD','ProjectDetail','file','checkbox','needNDA'];

}