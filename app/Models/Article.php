<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Attributes\fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[fillable(['image', 'title', 'content'])]

class Article extends Model
{

    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;
}
