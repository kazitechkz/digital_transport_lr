<?php

namespace App\Traits;

trait CRUD
{
    public static function boot(): void
    {
        parent::boot();

        self::creating(function($model){

        });

        self::created(function($model){
            flush()->success('Успешно добавлен');
        });

        self::updating(function($model){
        });

        self::updated(function($model){
            flush()->info('Успешно изменены данные!');
        });

        self::deleting(function($model){

        });

        self::deleted(function($model){
            flush()->error('Удалено успешно');
        });
    }

    /**
     * @param $fields $request->all()
     * @return static
     */
    public static function add($fields): static
    {
        $model = new static;
        $model->fill($fields);
        $model->save();
        return $model;
    }

    /**
     * @param $fields $request->all()
     * @return void
     */
    public function edit($fields): void
    {
        $this->fill($fields);
        $this->save();
    }

    public static function show($id){
        $model = self::find($id);
        if($model){
            return $model;
        }
    }

    public function remove(): void
    {
        $this->delete();
    }
}
