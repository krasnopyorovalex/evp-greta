<?php

declare(strict_types=1);

namespace App\Http\Requests\Forms;

use App\Http\Requests\Request;
use App\Rules\NotUrl;
use App\Rules\WorkExist;

/**
 * Class CalculateRequest
 * @package App\Http\Requests\Forms
 */
class OrderRequest extends Request
{
    public function rules(): array
    {
        return [
            'excursion' => ['required', 'string', new WorkExist()],
            'fio' => ['required', 'string', 'min:2', 'regex:/[А-Яа-яЁё]/u', new NotUrl()],
            'phone' => ['required', 'string'],
            'message' => ['string']
        ];
    }
}
