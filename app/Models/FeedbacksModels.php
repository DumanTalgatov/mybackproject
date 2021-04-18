<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbacksModels extends Model
{
    use HasFactory;
    protected $table="feedbacks_models";
    protected $fillable = ['review', 'name', 'email', 'topic', 'image'];
}
