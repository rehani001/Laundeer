<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_detail_transaksi extends Model
{
	protected $fillable = ['id_transaksi', 'id_paket', 'qty', 'keterangan', 'id_user'] ; 

	public function tb_paket()
	{
		return $this->belongsTo(tb_paket::class, 'id_paket');
	}

	public function user()
    {
    	return $this->belongsTo(User::class, 'id_user');
    }
}
