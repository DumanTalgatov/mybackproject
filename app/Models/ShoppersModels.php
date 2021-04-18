<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppersModels extends Model
{
    use HasFactory;
    protected $table="shoppers_models";
    protected $fillable = ['email', 'password'];
}
