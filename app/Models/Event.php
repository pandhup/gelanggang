<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  protected $tabel = 'event';
  public $fillable = ['nama','deskripsi','tanggal_mulai','tanggal_selesai','lokasi','kontak','status','id_user_member'];
}
