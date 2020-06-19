<?php

namespace App\Models\Core;

use Illuminate\Support\Facades\Validator;


trait Core
{
    protected $errors;

    public function validate($data, $updateItemId = null)
    {
        // Make a new validator object.
        $v = Validator::make($data, $this->validationRules);

        // Check for failure.
        if ($v->fails()) {
            $this->errors = $v->errors();

            return false;
        }

        // Validation pass.
        return true;
    }


    public function errors()
    {
        return $this->errors;
    }
}
