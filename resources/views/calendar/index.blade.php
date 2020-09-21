@extends('layouts.app')
@section('title', 'カレンダー')
@section('content')
<div class="container">
   {!!$cal_tag!!}
  <a class="btn btn-success"href="{{ url('/holiday') }}">休日設定</a>
</div>
@endsection

