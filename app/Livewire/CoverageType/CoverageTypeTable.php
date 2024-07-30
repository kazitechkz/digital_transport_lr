<?php

namespace App\Livewire\CoverageType;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\CoverageType;

class CoverageTypeTable extends DataTableComponent
{
    protected $model = CoverageType::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->searchable(),
            Column::make("Наименование на русском", "title_ru")
                ->searchable(),
            Column::make("Наименование на казахском", "title_kk")
                ->searchable(),
            Column::make("Наименование на английском", "title_en")
                ->searchable(),
            Column::make("Создан", "created_at")
                ->sortable(),
            Column::make("Обновлен", "updated_at")
                ->sortable(),
        ];
    }
}
