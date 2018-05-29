<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  protected $tabel = 'event';
  public $fillable = ['nama','lokasi','tanggal_mulai','tanggal_selesai','deskripsi','kontak','status','id_user_member'];
  public $timestamps = false;
}
