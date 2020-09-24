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

            <div class="card-body bg-warning">
              <p class="text-black-50"> {{ $memo->content }} </p>
            </div>
            
            <div class="card-footer text-right bg-white">
              <a href="{{ route('edit', ['id'=>$memo->id])}}" class="btn btn-info">編集</a>
              <a href="{{ route('delete', ['id'=>$memo->id])}}" class="btn btn-danger">削除</a>
              <div class="text-left text-dark">進捗状況
                <form action="/" method="post">
                <div class="value">0</div>
                  <script src="js/index.js"></script>
                  <input type="range" min="0" max="100" step="1" value="0">
                  
               
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
  </div>
</div>

@endsection