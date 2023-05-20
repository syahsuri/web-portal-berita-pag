<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;

    protected $table = 'video';

    protected $fillable = [
        'judul',
        'slug',
        'id_divisi',
        'author',
        'video',
        'deskripsi',
    ];
    public function division()
    {
        return $this->belongsTo(division::class, 'id_divisi', 'id');
    }
}
