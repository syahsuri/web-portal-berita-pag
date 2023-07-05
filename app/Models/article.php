<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'slug',
        'id_divisi',
        'author',
        'thumbnail',
        'article',
    ];

    public function division()
    {
        return $this->belongsTo(division::class, 'id_divisi', 'id');
    }

    public function topNews()
    {
        return $this->hasOne(TopNews::class, 'id_articles');
    }

    public function view()
    {
        return $this->hasOne(View::class, 'article_id');
    }

}
