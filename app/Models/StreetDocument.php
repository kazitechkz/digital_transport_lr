<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\CRUD;
use App\Traits\UploadFile;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StreetDocument
 *
 * @property int $id
 * @property int $file_id
 * @property int $document_type_id
 * @property int $street_id
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property DocumentType $document_type
 * @property File $file
 * @property Street $street
 *
 * @package App\Models
 */
class StreetDocument extends Model
{
    use CRUD, UploadFile;
	protected $table = 'street_documents';

	protected $casts = [
		'file_id' => 'int',
		'document_type_id' => 'int',
		'street_id' => 'int'
	];

	protected $fillable = [
		'file_id',
		'document_type_id',
		'street_id',
		'description'
	];

	public function document_type()
	{
		return $this->belongsTo(DocumentType::class);
	}

	public function file()
	{
		return $this->belongsTo(File::class);
	}

	public function street()
	{
		return $this->belongsTo(Street::class);
	}
}
