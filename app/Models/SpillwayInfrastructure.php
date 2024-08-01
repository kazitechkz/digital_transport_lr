<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\CRUD;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SpillwayInfrastructure
 *
 * @property int $id
 * @property int $order
 * @property float $on_axis_m
 * @property float $from_axis_m
 * @property bool $is_on_the_roadway
 * @property bool $is_on_the_sidewalk
 * @property bool $is_on_the_lawn
 * @property string|null $note
 * @property int $street_id
 * @property int $side_id
 * @property int $well_type_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Side $side
 * @property Street $street
 * @property WellsType $wells_type
 *
 * @package App\Models
 */
class SpillwayInfrastructure extends Model
{
    use CRUD;
	protected $table = 'spillway_infrastructures';

	protected $casts = [
		'order' => 'int',
		'on_axis_m' => 'float',
		'from_axis_m' => 'float',
		'is_on_the_roadway' => 'bool',
		'is_on_the_sidewalk' => 'bool',
		'is_on_the_lawn' => 'bool',
		'street_id' => 'int',
		'side_id' => 'int',
		'well_type_id' => 'int'
	];

	protected $fillable = [
		'order',
		'on_axis_m',
		'from_axis_m',
		'is_on_the_roadway',
		'is_on_the_sidewalk',
		'is_on_the_lawn',
		'note',
		'street_id',
		'side_id',
		'well_type_id'
	];

	public function side()
	{
		return $this->belongsTo(Side::class);
	}

	public function street()
	{
		return $this->belongsTo(Street::class);
	}

	public function wells_type()
	{
		return $this->belongsTo(WellsType::class, 'well_type_id');
	}
}
