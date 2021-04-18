<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomersModels extends Model
{
    use HasFactory;
    protected $table="customers_models";
    protected $fillable = ['first_name', 'last_name', 'email', 'password'];
}
