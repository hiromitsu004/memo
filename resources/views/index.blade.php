@extends('layouts.app')

@section('content')


<div class="container">
  <div class="text-black-50 text-left border-bottom ">
    <h1 class="">タスク一覧</h1>
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
              <a href="{{ route('delete', ['id'=>$memo->id])}}" class="text-danger">削除</a>
              <div class="text-left text-dark">進捗状況
                <form action="/" method="post">
              　<input type="range" id="range" min="0" max="10" step="1" value="5">
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
  </div>
</div>

@endsection