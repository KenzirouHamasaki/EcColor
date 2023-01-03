<!doctype html>

@extends('layouts.app')

@section('title')
商品一覧
@endsection

@section('content')

  <div class="jumbotron top-img">
    <p id="title" class="text-center text-black top-img-text">{{ config('app.name', 'Laravel')}}</p>
  </div>

  <div class="back-ground">

    <div class="container">
      <div class="top__title text-center">
          自慢の商品一覧
      </div>
    </div>

    <div class="input-group">
      <input type="text" class="form-control" placeholder="キーワードを入力">
      <button class="btn btn-outline-success" type="button" id="button-addon2"><i class="fas fa-search"></i> 検索</button>
    </div>



    <div class="container">
      <br>
      <br>
      <h1>ページネーションテスト</h1>
      <div class="row">

          <tbody>
              @if(!empty($data) && $data->count())
                  @foreach($data as $key => $value)
                      <tr>
                        <a href="{{ route('product.show', $value->id) }}" class="col-lg-4 col-md-6">
                          <div class="card">
                              <img src="{{ asset($value->image) }}" class="card-img"/>
                              <div class="card-body">
                                  <p class="card-title">{{ $value->name }}</p>
                                  <p class="card-text">¥{{ number_format($value->price) }}</p>
                              </div>
                          </div>
                        </a>
                          
                      </tr>
                  @endforeach
              @else
                  <tr>
                      <td colspan="10">There are no data.</td>
                  </tr>
              @endif
          </tbody>
      </table>
            
      {!! $data->links() !!}
    </div>


  </div>
@endsection


