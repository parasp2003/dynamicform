<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Form extends Model {
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'form_name', 'created_at', 'updated_at',
	];

	protected $hidden = [
		'id', 'created_at', 'updated_at',
	];

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'form';

	/**
	 * The primary key associated with the table.
	 *
	 * @var string
	 */
	protected $primaryKey = 'id';

}
