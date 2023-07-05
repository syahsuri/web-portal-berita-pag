<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class division extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_divisi'
    ];

    // Division.php (Division model)

    public function articles()
    {
        return $this->hasMany(article::class, 'id_divisi');
    }
}
