<?php

namespace App\Http\Controllers;

use App\Http\Requests\Forms\CallbackRequest;
use App\Http\Requests\Forms\CalculateRequest;
use App\Http\Requests\Forms\OrderRequest;
use App\Http\Requests\Forms\RecallRequest;
use App\Mail\CallbackSent;
use App\Mail\CalculateSent;
use App\Mail\OrderSent;
use App\Mail\RecallSent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class FormHandlerController
 * @package App\Http\Controllers
 */
class FormHandlerController extends Controller
{
    use DispatchesJobs;

    private array $to = ['mirgorak@gmail.com', 'mirgorak@yandex.ru'];

    /**
     * @param CallbackRequest $request
     * @return array
     */
    public function callback(CallbackRequest $request): array
    {
        Mail::to($this->to)->send(new CallbackSent($request->all()));

        return [
            'message' => 'Благодарим за Вашу заявку. Наш менеджер свяжется с Вами в ближайшее время',
            'status' => 200
        ];
    }

    /**
     * @param RecallRequest $request
     * @return array
     */
    public function recall(RecallRequest $request): array
    {
        Mail::to($this->to)->send(new RecallSent($request->all()));

        return [
            'message' => 'Благодарим за Вашу заявку. Наш менеджер свяжется с Вами в ближайшее время',
            'status' => 200
        ];
    }

    /**
     * @param CalculateRequest $request
     * @return array
     */
    public function calculate(CalculateRequest $request): array
    {
        Mail::to($this->to)->send(new CalculateSent($request->all()));

        return [
            'message' => 'Благодарим за Вашу заявку. Наш менеджер свяжется с Вами в ближайшее время',
            'status' => 200
        ];
    }

    /**
     * @param OrderRequest $request
     * @return array
     */
    public function order(OrderRequest $request): array
    {
        Mail::to($this->to)->send(new OrderSent($request->all()));

        return [
            'message' => 'Благодарим за Вашу заявку. Наш менеджер свяжется с Вами в ближайшее время',
            'status' => 200
        ];
    }
}
