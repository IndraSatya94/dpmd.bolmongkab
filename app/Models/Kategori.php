<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id';
    use HasFactory;
  
    protected $fillable = [
        'nama'
    ];

    public function pengumuman()
    {
        return $this->hasMany(Pengumuman::class);

   }
   public function berita()
   {
       return $this->hasMany(Berita::class);

  }
}
