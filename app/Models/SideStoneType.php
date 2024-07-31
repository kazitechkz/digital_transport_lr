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
 * Class SideStoneType
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
class SideStoneType extends Model
{
    use CRUD;
	protected $table = 'side_stone_types';

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
