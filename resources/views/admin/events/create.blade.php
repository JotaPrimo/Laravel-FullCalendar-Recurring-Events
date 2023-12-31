@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.event.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.events.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.event.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($event) ? $event->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.event.fields.name_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('start_time') ? 'has-error' : '' }}">
                <label for="start_time">{{ trans('cruds.event.fields.start_time') }}*</label>
                <input type="text" id="start_time" name="start_time" class="form-control datetime" value="{{ old('start_time', isset($event) ? $event->start_time : '') }}" required>
                @if($errors->has('start_time'))
                    <em class="invalid-feedback">
                        {{ $errors->first('start_time') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.event.fields.start_time_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('end_time') ? 'has-error' : '' }}">
                <label for="end_time">{{ trans('cruds.event.fields.end_time') }}*</label>
                <input type="text" id="end_time" name="end_time" class="form-control datetime" value="{{ old('end_time', isset($event) ? $event->end_time : '') }}" required>
                @if($errors->has('end_time'))
                    <em class="invalid-feedback">
                        {{ $errors->first('end_time') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.event.fields.end_time_helper') }}
                </p>
            </div>


            <div class="form-group {{ $errors->has('recurrence') ? 'has-error' : '' }}">
                <label>{{ trans('cruds.event.fields.recurrence') }}*</label>
                @foreach(App\Event::RECURRENCE_RADIO as $key => $label)
                    <div>
                        <input id="recurrence_{{ $key }}" name="recurrence" type="radio" value="{{ $key }}" {{ old('recurrence', 'none') === (string)$key ? 'checked' : '' }} required>
                        <label for="recurrence_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('recurrence'))
                    <em class="invalid-feedback">
                        {{ $errors->first('recurrence') }}
                    </em>
                @endif
            </div>

            <div class="row">
                <div class="form-group col-md-4 {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name">data_pt</label>
                    <input type="date" id="data_pt" name="data_pt" class="form-control" value="{{ old('data_pt', isset($event) ? $event->data_pt : '') }}" required>
                    @if($errors->has('data_pt'))
                        <em class="invalid-feedback">
                            {{ $errors->first('data_pt') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.event.fields.name_helper') }}
                    </p>
                </div>
                <div class="form-group col-md-4 {{ $errors->has('start_time') ? 'has-error' : '' }}">
                    <label for="start_time">hora_inicio</label>
                    <input type="time" id="hora_inicio" name="hora_inicio" class="form-control" value="{{ old('hora_inicio', isset($event) ? $event->hora_inicio : '') }}" required>
                    @if($errors->has('hora_inicio'))
                        <em class="invalid-feedback">
                            {{ $errors->first('hora_inicio') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.event.fields.start_time_helper') }}
                    </p>
                </div>
                <div class="form-group col-md-4 {{ $errors->has('hora_fim') ? 'has-error' : '' }}">
                    <label for="hora_fim">hora_fim</label>
                    <input type="time" id="hora_fim" name="hora_fim" class="form-control" value="{{ old('ora_fim', isset($event) ? $event->hora_fim : '') }}" required>
                    @if($errors->has('hora_fim'))
                        <em class="invalid-feedback">
                            {{ $errors->first('end_time') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.event.fields.end_time_helper') }}
                    </p>
                </div>
                <div class="form-group col-md-4 {{ $errors->has('hora_fim') ? 'has-error' : '' }}">
                    <label for="hora_fim">hora_fim</label>

                    <select name="color" class="form-control" id="color">
                        @foreach(\App\Event::CORES as $cor)
                            <option class="text-white" value="{{ $cor[0] }}" style="background-color: {{$cor[0]}}">{{ $cor[1] }}</option>
                        @endforeach
                        <option></option>
                    </select>
                    <p class="helper-block">
                        {{ trans('cruds.event.fields.end_time_helper') }}
                    </p>
                </div>
            </div>


            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection
