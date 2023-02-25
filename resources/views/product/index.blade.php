<!doctype html>

@extends('layouts.app')

@section('title')
商品一覧
@endsection

@section('content')

  <div class="jumbotron top-img">
    <p id="title" class="text-center text-light top-img-text">{{ config('app.name', 'Laravel')}}</p>
  </div>

  <div class="back-ground">

    <div class="container">
      <div class="top__title text-center">
          自慢の商品一覧
      </div>
    </div>


    <form method="GET" action="{{ route('product.index') }}">
        <input type="search" placeholder="商品名を入力" name="search" value="@if (isset($search)) {{ $search }} @endif">
        <div>
            <button type="submit">検索</button>
            <button>
                <a href="{{ route('product.index') }}" class="text-black">
                    リセットさん
                </a>
            </button>
        </div>
    </form>

    <div class="container">
      <br>
      <br>
      <h1>ページネーションテスト</h1>
      <div class="row">

          <tbody>
              @if(!empty($products) && $products->count())
                  @foreach($products as $key => $value)
                      <tr>
                        <a href="{{ route('product.show', $value->id) }}" class="col-lg-4 col-md-6">
                          <div class="card">
                              <img src="{{ asset($value->image) }}" class="card-img"/>
                              <div class="card-body">
                                  <p class="card-title">{{ $value->name }}</p>
                                  <p class="card-text">{{ number_format($value->price) }}</p>
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
            
      {{ $products->appends(request()->input())->links() }}
    </div>
    
{{--
    <div class="container">
      <h1>Laravel 8 Pagination Example - ItSolutionStuff.com</h1>
      <table class="table table-bordered">
          <thead>
              <tr>
                  <th>Name</th>
                  <th width="300px;">Action</th>
              </tr>
          </thead>
          <tbody>
              @if(!empty($data) && $data->count())
                  @foreach($data as $key => $value)
                      <tr>
                          <td>{{ $value->name }}</td>
                          <td>
                              <button class="btn btn-danger">Delete</button>
                          </td>
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
--}}
  </div>
@endsection


