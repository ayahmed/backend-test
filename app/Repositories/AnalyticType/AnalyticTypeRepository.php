<?php

namespace App\Repositories\AnalyticType;

use App\Models\AnalyticType;
use App\Repositories\Core\CoreRepository;


class AnalyticTypeRepository extends CoreRepository implements AnalyticTypeInterface
{
    public function __construct(AnalyticType $model)
    {
        parent::__construct($model);
    }
}
