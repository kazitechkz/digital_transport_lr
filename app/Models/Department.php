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
 * Class Department
 *
 * @property int $id
 * @property string $title_kk
 * @property string $title_ru
 * @property bool $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Department extends Model
{
    use CRUD;
	protected $table = 'departments';

	protected $casts = [
		'status' => 'bool'
	];

	protected $fillable = [
		'title_kk',
		'title_ru',
		'status'
	];

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
