<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    use HasFactory;


    protected $table = 'images';
    protected $fillable = [
        'image',
        'deskripsi'
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
