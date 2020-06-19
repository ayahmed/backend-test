<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Repositories\PropertyAnalytic\PropertyAnalyticInterface;

class PropertyAnalyticController extends ResourceController
{
    function setInterface()
    {
        return PropertyAnalyticInterface::class;
    }

}
