<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
	protected $fillable = [
		'name',
		'id_metiers',
		'departement'
	];
}
