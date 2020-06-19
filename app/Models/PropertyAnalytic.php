<?php

namespace App\Models;

use App\Models\Core\Core;
use Illuminate\Database\Eloquent\Model;

class PropertyAnalytic extends Model
{
    use Core;

    protected $fillable = [
        'property_id', 'analytic_type_id', 'value'
    ];

    protected $validationRules = [
        "property_id" => ["required", "exists:properties,id"],
        "analytic_type_id" => ["required", "exists:analytic_types,id"],
        "value" => ["required"]
    ];
}
