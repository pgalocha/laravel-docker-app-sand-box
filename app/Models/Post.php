<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    // Specify the table associated with the model (optional if the table name follows Laravel's conventions)
    protected $table = 'posts';

    // Define properties for the model columns
    protected $title;
    protected $content;
    protected $user_id;

    // Specify the fillable fields for mass assignment
    protected $fillable = [
        'title',
        'content',
    ];

    // If you want to use created_at and updated_at timestamps
    public $timestamps = true;
}
