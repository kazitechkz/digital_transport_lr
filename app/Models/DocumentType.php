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
 * Class DocumentType
 *
 * @property int $id
 * @property string $title
 * @property string $extension
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|StreetDocument[] $street_documents
 *
 * @package App\Models
 */
class DocumentType extends Model
{
    use CRUD;
	protected $table = 'document_types';

	protected $fillable = [
		'title',
		'extension'
	];

	public function street_documents()
	{
		return $this->hasMany(StreetDocument::class);
	}
}
