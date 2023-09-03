<?php

namespace App\Http\Requests;

use App\Event;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreEventRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('event_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {

       // dd($this->all());
        return [
            'name'       => [
                'required',
            ],
            'start_time' => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
            'end_time'   => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
            'recurrence' => [
                'required',
            ],

            'color' => 'required'
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            // 'start_time' => $this->data_pt .' ' . $this->hora_inicio . ':00',
            // 'end_time' => $this->data_pt .' ' . $this->hora_inicio . ':00',
            'start_time' => $this->data_pt .' ' . $this->hora_inicio . ':00',
            'end_time' => $this->data_pt .' ' . $this->hora_fim . ':00',
        ]);
    }
}
