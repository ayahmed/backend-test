<?php

namespace App\Repositories\Property;

use App\Models\Property;
use App\Repositories\Core\CoreRepository;
use App\Repositories\Property\PropertyInterface;


class PropertyRepository extends CoreRepository implements PropertyInterface
{
    public function __construct(Property $model)
    {
        parent::__construct($model);
    }
}
