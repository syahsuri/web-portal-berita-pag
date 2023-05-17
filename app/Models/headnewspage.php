<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class headnewspage extends Model
{
    use HasFactory;

    protected $table = 'top_news';

    protected $fillable = [
        'id_articles'
    ];

    public function articles()
    {
        return $this->belongsTo(article::class, 'id_articles');
    }

    public function divisions()
    {
        return $this->belongsTo(division::class, 'id_divisi');
    }
}
