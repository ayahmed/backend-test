<?php

namespace App\Http\Controllers;

use App\Repositories\Core\ResourceInterface;
use Illuminate\Http\Request;

use Illuminate\Container\Container as App;

abstract class ResourceController extends Controller implements ResourceInterface
{
    protected $app, $interface, $request;


    abstract function setInterface();


    public function __construct(
        App $app,
        Request $request
    )
    {
        $this->app = $app;
        $this->request = $request;
        $this->interface = $this->makeInterface();
    }

    private function makeInterface()
    {
        return $this->app->make($this->setInterface());
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->interface->index($this->request->all());
    }


    /**
     * @return mixed
     */
    public function store()
    {
        return $this->interface->store($this->request->all());
    }


    /**
     * @return mixed
     */
    public function storeOrUpdate($priKeyVal, $params = [])
    {
        return $this->interface->storeOrUpdate($priKeyVal, $params);
    }


    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->interface->show($id);
    }


    /**
     * @param $id
     * @return mixed
     */
    public function update($id)
    {
        return $this->interface->update($id, $this->request->all());
    }


    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        return $this->interface->destroy($id);
    }
}
