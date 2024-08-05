<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\UploadFile;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class File
 *
 * @property int $id
 * @property string $url
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|StreetDocument[] $street_documents
 *
 * @package App\Models
 */
class File extends Model
{
    use UploadFile;
	protected $table = 'files';

	protected $fillable = [
		'url'
	];

	public function street_documents()
	{
		return $this->hasMany(StreetDocument::class);
	}
}
