<?php

namespace App\Livewire\RoadSign;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\RoadSign;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class RoadSignTable extends DataTableComponent
{
    protected $model = RoadSign::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setBulkActions([
            'deleteSelected' => 'Удалить',
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function($row) {
                return route('road-sign.edit', $row);
            });
    }

    public function bulkActions(): array
    {
        return [
            'deleteSelected' => 'Удалить',
        ];
    }

    public function deleteSelected(): void
    {
        if (auth()->user()->can('RoadSign delete')) {
            $model = $this->getSelected();
            foreach ($model as $key => $value) {
                $model_one = RoadSign::find($value);
                $model_one?->delete();
            }
            $this->clearSelected();
        } else {
            $this->redirect(route('bad-request'));
        }
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
            Column::make("Нормативный документ", "normative_act")
                ->searchable(),
            Column::make("Номер знака", "sign_number")
                ->searchable(),
            BooleanColumn::make("Активен", "is_active")
                ->searchable(),
            Column::make("Создан", "created_at")
                ->sortable(),
            Column::make("Обновлен", "updated_at")
                ->sortable(),
        ];
    }
}
