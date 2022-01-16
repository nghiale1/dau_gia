<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Chitietdaugium
 * 
 * @property int $ctdg_id
 * @property Carbon $ctdg_thoigian
 * @property int $dg_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Daugium $daugium
 *
 * @package App\Models
 */
class Chitietdaugium extends Model
{
	protected $table = 'chitietdaugia';
	protected $primaryKey = 'ctdg_id';

	protected $casts = [
		'dg_id' => 'int'
	];

	protected $dates = [
		'ctdg_thoigian'
	];

	protected $fillable = [
		'ctdg_thoigian',
		'dg_id'
	];

	public function daugium()
	{
		return $this->belongsTo(Daugium::class, 'dg_id');
	}
}