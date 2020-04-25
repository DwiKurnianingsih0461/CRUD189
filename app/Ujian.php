<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
  protected $table = 'kuliah';
  protected $fillable = ['id','nama_mk','dosen','jumlah_soal','keterangan']; 
}
