<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CommunicationType
 * 
 * @property int $id
 * @property string $title_ru
 * @property string|null $title_kk
 * @property string|null $title_en
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|CommunicationWithinTheBandOnRoadway[] $communication_within_the_band_on_roadways
 *
 * @package App\Models
 */
class CommunicationType extends Model
{
	protected $table = 'communication_types';

	protected $fillable = [
		'title_ru',
		'title_kk',
		'title_en'
	];

	public function communication_within_the_band_on_roadways()
	{
		return $this->hasMany(CommunicationWithinTheBandOnRoadway::class, 'ctype_id');
	}
}
