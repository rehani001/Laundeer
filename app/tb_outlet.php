<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_outlet extends Model
{
    protected $fillable = ['nama', 'alamat', 'tlp'];

    public function user()
    {
    	return $this->hasMany(User::class)->withPivot(['nama']);
    }

    public function tb_paket()
    {
    	return $this->hasMany(User::class)->withPivot(['nama']);
    }
}
