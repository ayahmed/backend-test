<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Repositories\AnalyticType\AnalyticTypeInterface;

class AnalyticTypeController extends ResourceController
{
    function setInterface()
    {
        return AnalyticTypeInterface::class;
    }

}
