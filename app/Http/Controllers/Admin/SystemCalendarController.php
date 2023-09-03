<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SystemCalendarController extends Controller
{
    public $sources = [
        [
            'model'      => '\\App\\Event',
            'date_field' => 'start_time',
            'end_field'  => 'end_time',
            'field'      => 'name',
            'prefix'     => '',
            'suffix'     => '',
            'route'      => 'admin.events.edit',
            'eventColor' => ''
        ],
    ];

    public function index()
    {
        $events = [];

        foreach ($this->sources as $source) {
            foreach (Event::all() as $model) {
                $crudFieldValue = $model->getOriginal($source['date_field']);

                if (!$crudFieldValue) {
                    continue;
                }

                $events[] = [
                    'title' => trim($source['prefix'] . " " . $model->{$source['field']}
                        . " " . $source['suffix']),
                    'start' => $crudFieldValue,
                    'end'   => $model->{$source['end_field']},
                    'color'   => $model->color,
                    'url'   => route($source['route'], $model->id),
                ];
            }
        }

        return view('admin.calendar.calendar', compact('events'));
    }
}
