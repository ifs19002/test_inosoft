<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Kendaraan extends Eloquent{
	use HasFactory;

	protected $collection = 'kendaraans';

	protected $fillable = [
		'jenis',
		'merek',
		'mesin',
		'suspensi',
		'transmisi',
		'tahun',
		'warna',
		'harga',
		'penumpang',
		'tipe'
	];
}
