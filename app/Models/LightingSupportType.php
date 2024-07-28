<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LightingSupportType
 * 
 * @property int $id
 * @property string $title_ru
 * @property string|null $title_kk
 * @property string|null $title_en
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class LightingSupportType extends Model
{
	protected $table = 'lighting_support_types';

	protected $fillable = [
		'title_ru',
		'title_kk',
		'title_en'
	];
}
