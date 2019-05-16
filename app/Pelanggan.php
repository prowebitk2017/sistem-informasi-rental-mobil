<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $fillable = ['nik', 'nama_lengkap', 'email', 'no_hp', 'alamat'];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}