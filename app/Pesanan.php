<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';
    protected $fillable = ['nama_lengkap','email','no_hp','nama_lengkap','mobil','jumlah_unit','tgl_sewa','tgl_kembali','pesan','lokasi_jemput'];
}
