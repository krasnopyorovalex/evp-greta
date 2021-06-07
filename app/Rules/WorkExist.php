<?php

declare(strict_types=1);

namespace App\Rules;

use App\Domain\Work\Queries\ExistWorkQuery;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Bus\DispatchesJobs;

class WorkExist implements Rule
{
    use DispatchesJobs;

    /**
     * @param string $attribute
     * @param mixed $value
     * @return bool|mixed
     */
    public function passes($attribute, $value)
    {
        return $this->dispatch(new ExistWorkQuery($value));
    }

    /**
     * @return string
     */
    public function message(): string
    {
        return 'The validation error message.';
    }
}
