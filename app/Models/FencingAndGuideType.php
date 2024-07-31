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
 * Class FencingAndGuideType
 *
 * @property int $id
 * @property string $title_ru
 * @property string|null $title_kk
 * @property string|null $title_en
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|FencingAndGuideOnRoadway[] $fencing_and_guide_on_roadways
 *
 * @package App\Models
 */
class FencingAndGuideType extends Model
{
    use CRUD;
	protected $table = 'fencing_and_guide_types';

	protected $fillable = [
		'title_ru',
		'title_kk',
		'title_en'
	];

	public function fencing_and_guide_on_roadways()
	{
		return $this->hasMany(FencingAndGuideOnRoadway::class, 'fencing_guide_type_id');
	}
}
