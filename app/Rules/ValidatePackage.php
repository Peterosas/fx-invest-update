<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Package;
use App\Investment;

class ValidatePackage implements Rule
{
    
    protected $msg;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(Package $package)
    {
        $this->package = $package;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (Investment::where('package_id', $value)->where('status', 'running')->where('user_id', \Auth::id())->exists()) {
            $this->msg = 'You already have an active investment on this package. Please choose another package.';
            return false;
        }
        
        $this->msg = 'The package you selected does not exist';
        return ($value != $this->package->id);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->msg;
    }
}
