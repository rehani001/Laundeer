<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_transaksi extends Model
{
    protected $fillable = ['id_outlet', 'kode_invoice', 'id_member', 'tgl', 'batas_waktu', 'tgl_bayar', 'biaya_tambahan', 'diskon', 'pajak', 'status', 'dibayar', 'id_user'];

    public function member()
	{
		return $this->belongsTo(tb_member::class, 'id_member');
	}
}