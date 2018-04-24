@extends('layouts.app')

@section('content')
<h1>タスク新規作成</h1>
    {!! Form::model($task, ['route' => 'tasks.store']) !!}

      <div class="form-group col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        {!! Form::label('content', 'タスク名:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
      </div>

      <div class="from-group col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
      </div>

      <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        {!! Form::submit('作成', ['class' => 'btn btn-primary']) !!}
      </div>

    {!! Form::close() !!}
@endsection