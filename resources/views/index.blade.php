@extends('layouts.app')

@section('content')
<div class="container">
  <div class="text-black-50 text-left border-bottom ">
    <h1 class="">MEMO</h1>
    <div class="text-right">
      <a href="{{ route('create') }}" class="btn btn-outline-secondary btn-sm mt-1">メモを作成</a>
    </div>
  </div>


  

  <div class="container">
    <div class="row">

        @foreach ($memos as $memo)
        <div class="col-md-4 text-left mt-4">

          <div class="card">

            <div class="card-body">
              <p class="text-black-50"> {{ $memo->content }} </p>
            </div>

            <div class="card-footer text-right">
              <a href="{{ route('edit', ['id'=>$memo->id])}}" class="text-info">編集</a>
              <a href="{{ route('delete', ['id'=>$memo->id])}}" class="text-info">削除</a>
            </div>

          </div>

        </div>
        @endforeach

      </div>
  </div>
</div>

@endsection