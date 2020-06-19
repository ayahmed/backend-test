<?php

namespace App\Models;

use App\Models\Core\Core;
use Illuminate\Database\Eloquent\Model;

class AnalyticType extends Model
{
    use Core;

    protected $fillable = [
        'name', 'units', 'is_numeric', 'num_decimal_places'
    ];

    protected $validationRules = [
        "name" => ["required", "string"],
        "units" => ["required", "string"],
        "is_numeric" => ["required"],
        "num_decimal_places" => ["required"],
    ];
}
