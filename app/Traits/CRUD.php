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
            toastr()->success('Успешно добавлен');
        });

        self::updating(function($model){
        });

        self::updated(function($model){
            toastr()->info('Успешно изменены данные!');
        });

        self::deleting(function($model){

        });

        self::deleted(function($model){
            toastr()->error('Удалено успешно');
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

    public static function addWithBoolean($fields,$request): static
    {
        try{
            $model = new static;
            foreach ($model->casts as $key => $value){
                if($value == "bool"){
                    if(isset($fields[$key])){
                        $fields[$key] = $request->boolean($fields[$key]);
                    }
                    else{
                        $fields[$key] = false;
                    }
                }
            }
            $model->fill($fields);
            $model->save();
            return $model;
        }
        catch (\Exception $exception){
            dd($exception);
        }
    }

    public function editWithBoolean($fields,$request): void
    {
        try{
            foreach ($this->casts as $key => $value){
                if($value == "bool"){
                    if(isset($fields[$key])){
                        $fields[$key] = $request->boolean($fields[$key]);
                    }
                    else{
                        $fields[$key] = false;
                    }
                }
            }
            $this->fill($fields);
            $this->save();
        }
        catch (\Exception $exception){
            dd($exception);
        }

    }
}
