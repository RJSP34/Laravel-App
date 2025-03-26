<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Import the HasFactory trait

class Note extends Model
{
        use HasFactory; // Use the HasFactory trait

        protected $fillable = ['note', 'user_id'];

}
