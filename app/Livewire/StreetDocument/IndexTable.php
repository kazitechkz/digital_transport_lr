<?php

namespace App\Livewire\StreetDocument;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\StreetDocument;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class IndexTable extends DataTableComponent
{
    protected $model = StreetDocument::class;

    public function configure(): void
    {
        $this->setBulkActions([
            'deleteSelected' => 'Удалить'
        ]);
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row) {
                return route('street-document.edit', $row);
            });
    }
    public function bulkActions(): array
    {
        return [
            'deleteSelected' => 'Удалить'
        ];
    }
    public function deleteSelected(): void
    {
        if (auth()->user()->can('StreetDocument delete')) {
            $model = $this->getSelected();
            foreach ($model as $key => $value) {
                $entity = StreetDocument::findOrFail($value);
                $entity?->file?->removeFile('url');
                $entity?->file?->delete();
                $entity?->delete();
            }
            $this->clearSelected();
        } else {
            $this->redirect(route('bad-request'));
        }
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable(),
            Column::make("Тип документа", "document_type.title")
                ->sortable(),
            Column::make("Улица", "street.title_ru")
                ->sortable(),
//            Column::make("Описание", "description")
//                ->sortable(),
            Column::make("Дата создания", "created_at")
                ->sortable(),
            ButtonGroupColumn::make('Действие')
                ->attributes(function($row) {
                    return [
                        'class' => 'space-x-2',
                    ];
                })
                ->buttons([
                    LinkColumn::make('View') // make() has no effect in this case but needs to be set anyway
                    ->title(fn($row) => 'Просмотреть')
                        ->location(fn($row) => route('street-document.show', $row))
                        ->attributes(function($row) {
                            return [
                                'class' => 'underline text-blue-500 hover:no-underline',
                            ];
                        })
                ])
        ];
    }
}
