<?php

namespace App\Repositories\Core;


interface ResourceInterface {
    public function index();
    public function show($id);
    public function store();
    public function update($id);
    public function storeOrUpdate($priKeyVal, $params = []);
    public function destroy($id);
}