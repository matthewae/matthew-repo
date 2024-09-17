<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;


    protected $fillable = [
        'Title',
        'description',
        'Page_Count',
        'Author_Name',
        'Author_Email',
        'Published_Date'
    ];
}
