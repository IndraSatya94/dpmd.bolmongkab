<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $primaryKey = 'id';
    use HasFactory;

    protected $fillable = [
        'nama'
    ];

    public function pengumuman()
    {
        return $this->hasMany(Pengumuman::class, 'id_tag');

   }
   public function berita()
    {
        return $this->hasMany(Berita::class, 'id_tag');

   }
}
