<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['pelanggan_id', 'supir_id', 'mobil_id', 'tgl_sewa', 'tgl_kembali', 'lama_sewa', 'jaminan', 'harga_sewa', 'dp', 'sisa'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class); 
    }

    public function supir()
    {
        return $this->belongsTo(Supir::class); 
    }

    public function mobil()
    {
        return $this->belongsTo(Mobil::class); 
    }
}
