<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
  protected $tabel = 'poster';
  public $fillable = ['nama_poster','id_event'];
  public $timestamps = false;
}
