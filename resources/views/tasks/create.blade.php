@extends('layouts.app')

@section('content')
<h1>タスク新規作成</h1>

{!! Form::model($task, ['route' => 'tasks.store']) !!}
  {!! Form::label('content', 'タスク名:') !!}
  {!! Form::text('content') !!}
  {!! Form::label('status', 'ステータス:') !!}
  {!! Form::text('status') !!}

  {!! Form::submit('作成') !!}

{!! Form::close() !!}
@endsection