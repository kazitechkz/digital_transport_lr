<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Unit
 * 
 * @property int $id
 * @property string $name
 * @property string $symbol
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|FencingAndGuideOnRoadway[] $fencing_and_guide_on_roadways
 *
 * @package App\Models
 */
class Unit extends Model
{
	protected $table = 'units';

	protected $fillable = [
		'name',
		'symbol'
	];

	public function fencing_and_guide_on_roadways()
	{
		return $this->hasMany(FencingAndGuideOnRoadway::class);
	}
}
