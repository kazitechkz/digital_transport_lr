<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\CRUD;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoadSignMaterial
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
class RoadSignMaterial extends Model
{
    use CRUD;
	protected $table = 'road_sign_materials';

	protected $fillable = [
		'title_ru',
		'title_kk',
		'title_en'
	];
}
