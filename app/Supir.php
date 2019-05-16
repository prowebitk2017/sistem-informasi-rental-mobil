<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    protected $table = 'supir';
    protected $fillable = ['no_sim', 'nama', 'no_hp', 'alamat', 'avatar'];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}


