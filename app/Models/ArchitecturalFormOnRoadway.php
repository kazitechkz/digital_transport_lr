<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\CRUD;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ArchitecturalFormOnRoadway
 *
 * @property int $id
 * @property int $order
 * @property float $start_m
 * @property float $end_m
 * @property float $square_m
 * @property float $perim_m
 * @property string|null $feature
 * @property int $street_id
 * @property int $side_id
 * @property int $architectural_form_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property ArchitecturalForm $architectural_form
 * @property Side $side
 * @property Street $street
 *
 * @package App\Models
 */
class ArchitecturalFormOnRoadway extends Model
{
    use CRUD;
	protected $table = 'architectural_form_on_roadways';

	protected $casts = [
		'order' => 'int',
		'start_m' => 'float',
		'end_m' => 'float',
		'square_m' => 'float',
		'perim_m' => 'float',
		'street_id' => 'int',
		'side_id' => 'int',
		'architectural_form_id' => 'int'
	];

	protected $fillable = [
		'order',
		'start_m',
		'end_m',
		'square_m',
		'perim_m',
		'feature',
		'street_id',
		'side_id',
		'architectural_form_id'
	];

	public function architectural_form()
	{
		return $this->belongsTo(ArchitecturalForm::class);
	}

	public function side()
	{
		return $this->belongsTo(Side::class);
	}

	public function street()
	{
		return $this->belongsTo(Street::class);
	}
}
