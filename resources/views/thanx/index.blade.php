@extends('layouts.app')

@section('title')
ありがとう
@endsection

@section('content')
<div class="back-ground">
  <div class="jumbotron text-center">
    <h1 class="display-3">お買い上げ<br>ありがとうございます！</h1>
    
    <p class="lead">これからは色の存在する新たな世界をお楽しみください！</p>
    <hr>
    <p>
      もう少し色が欲しい方はこちらから
    </p>
    <p class="lead">
      <a class="btn btn-primary btn-sm" href="{{ route('product.index') }}" role="button">トップページへ</a>
    </p>
  </div>
</div>

@endsection
