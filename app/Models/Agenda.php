<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table='agenda';
    use HasFactory;

    protected $fillable = [
        'user','acara','tempat','tanggal','mulai','selesai'
    ];
}
