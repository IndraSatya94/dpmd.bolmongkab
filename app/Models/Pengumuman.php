<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'pengumuman';
    protected $primaryKey = 'id';
    use HasFactory;

    protected $fillable = [
        'judul','id_kategori','id_user','id_tag','konten','slug'
    ];

    public function kategori()
     {
         return $this->belongsTo(Kategori::class, 'id_kategori', 'id');

    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');

   }
   public function tag()
    {
        return $this->belongsTo(Tag::class, 'id_tag', 'id');

   }
}
