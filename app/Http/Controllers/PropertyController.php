<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Repositories\Property\PropertyInterface;

class PropertyController extends ResourceController
{
    function setInterface()
    {
        return PropertyInterface::class;
    }

}
