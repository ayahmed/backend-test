<?php

namespace App\Models;

use App\Models\Core\Core;
use Faker\Provider\Uuid;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use Core;

    protected $fillable = [
        'guid', 'suburb', 'state', 'country'
    ];

    protected $validationRules = [
        "suburb" => ["required", "string"],
        "state" => ["required", "string"],
        "country" => ["required", "string"]
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->guid = Uuid::uuid();
        });
    }
}
