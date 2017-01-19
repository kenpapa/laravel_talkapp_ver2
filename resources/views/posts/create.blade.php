@extends('layouts.base')

@section('title')
メッセージ作成
@endsection

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>メッセージ作成</h1>
    <form action="{{ route('posts.store') }}" method="post">
      <div class="form-group">
        <label for="Message">メッセージ</label>
        <textarea class="form-control" name="message" id="Message" rows="5" placeholder="Your Post"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">送信</button>
      {{ csrf_field() }}
    </form>
  </div>
</div>
@endsection
