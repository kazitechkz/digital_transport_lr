<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SideStoneStamp
 * 
 * @property int $id
 * @property string $title_ru
 * @property string|null $title_kk
 * @property string|null $title_en
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|SideStoneOnRoadway[] $side_stone_on_roadways
 *
 * @package App\Models
 */
class SideStoneStamp extends Model
{
	protected $table = 'side_stone_stamps';

	protected $fillable = [
		'title_ru',
		'title_kk',
		'title_en'
	];

	public function side_stone_on_roadways()
	{
		return $this->hasMany(SideStoneOnRoadway::class);
	}
}
