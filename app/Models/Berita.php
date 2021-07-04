<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'judul','id_kategori','id_user','konten','image','slug'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');

   }

   public function user()
   {
       return $this->belongsTo(User::class, 'id_user', 'id');

  }
}
