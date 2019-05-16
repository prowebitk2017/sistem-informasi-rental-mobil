<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobil';
    protected $fillable = ['nama', 'tahun', 'warna', 'avatar', 'jenis', 'nopol', 'harga_sewa', 'kapasitas', 'status_pinjam', 'bahan_bakar'];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
