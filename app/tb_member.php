<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_member extends Model
{
	protected $fillable = ['nama', 'alamat', 'jenis_kelamin', 'tlp'];

	public function member()
	{
		return $this->hasMany(tb_transaksi::class, 'id_member');
	}
}
