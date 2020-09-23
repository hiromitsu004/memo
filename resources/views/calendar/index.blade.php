@extends('layouts.app')
@section('title', 'カレンダー')
@section('content')
<div class="container">
   {!!$cal_tag!!}
  <a class="btn btn-success"href="{{ url('/holiday') }}">スケジュール設定</a>
</div>
@endsection

