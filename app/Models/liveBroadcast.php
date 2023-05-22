<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class liveBroadcast extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_divisi',
        'deskripsi',
        'is_live'
    ];

    public function division()
    {
        return $this->belongsTo(division::class, 'id_divisi', 'id');
    }
}
