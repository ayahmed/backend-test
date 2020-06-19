<?php

namespace App\Repositories\PropertyAnalytic;

use App\Models\PropertyAnalytic;
use App\Repositories\Core\CoreRepository;


class PropertyAnalyticRepository extends CoreRepository implements PropertyAnalyticInterface
{
    public function __construct(PropertyAnalytic $model)
    {
        parent::__construct($model);
    }
}
