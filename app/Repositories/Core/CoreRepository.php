<?php

namespace App\Repositories\Core;


abstract class CoreRepository implements CoreInterface
{

    protected $model;


    public function __construct($model) {
        $this->model = new $model;
    }


    public function model(): object {
        return $this->model;
    }


    public function index($options = [])
    {
        return $this->model()->all();
    }


    public function show($id)
    {
        return $this->model()->find($id);
    }


    public function store($params = [])
    {
        if (!$this->model()->validate($params)) {
            return $this->model()->errors();
        } else {
            return $this->model()->create($params);
        }
    }


    public function storeOrUpdate($priKeyVal, $params = [])
    {
        if (!$this->model()->validate($params)) {
            return $this->model()->errors();
        } else {
            return $this->model()->updateOrCreate($priKeyVal, $params);
        }
    }


    public function update($id, $params = [])
    {
        if (!$this->model()->validate($params, $id)) {
            return $this->model()->errors();
        } else {
            $record = $this->model()->find($id);
            $record->update($params);
            $record = $this->model()->find($id);

            return $record;
        }
    }


    public function destroy($id)
    {
        return $this->model()->destroy($id);
    }
}
