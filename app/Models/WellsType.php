<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\CRUD;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WellsType
 *
 * @property int $id
 * @property string $title_ru
 * @property string|null $title_kk
 * @property string|null $title_en
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|SpillwayInfrastructure[] $spillway_infrastructures
 *
 * @package App\Models
 */
class WellsType extends Model
{
    use CRUD;
	protected $table = 'wells_types';

	protected $fillable = [
		'title_ru',
		'title_kk',
		'title_en'
	];

	public function spillway_infrastructures()
	{
		return $this->hasMany(SpillwayInfrastructure::class, 'well_type_id');
	}
}
