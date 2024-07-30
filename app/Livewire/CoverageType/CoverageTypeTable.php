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
        $this->setBulkActionsThAttributes([

            'class' => 'bg-red-500',

            'default' => false

        ]);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Title ru", "title_ru")
                ->sortable(),
            Column::make("Title kk", "title_kk")
                ->sortable(),
            Column::make("Title en", "title_en")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
