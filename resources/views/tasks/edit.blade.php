@extends('layouts.app')

@section('content')

  <h1>id: {{ $task->id }}の編集</h1>
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
      {{-- <div class="form-group col-md-offset-2 col-md-8"> --}}
      <div class="form-group col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        {!! Form::label('content', 'タスク名:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
      </div>

      {{-- <div class="form-group col-md-offset-2 col-md-8"> --}}
      <div class="form-group col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
      </div>

      {{-- <div class="col-md-offset-2 col-md-8"> --}}
      <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        {!! Form::submit('更新') !!}
      </div>

    {!! Form::close() !!}
@endsection
