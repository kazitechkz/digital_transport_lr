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
 * Class CategoryOfHighway
 *
 * @property int $id
 * @property string $title_ru
 * @property string|null $title_kk
 * @property string|null $title_en
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Roadway[] $roadways
 *
 * @package App\Models
 */
class CategoryOfHighway extends Model
{
	protected $table = 'category_of_highways';
    use CRUD;
	protected $fillable = [
		'title_ru',
		'title_kk',
		'title_en'
	];

	public function roadways()
	{
		return $this->hasMany(Roadway::class);
	}
}
