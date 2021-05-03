@extends('master')
@section('content')

<div class="custom-product">
      <div class="col-sm-4">
        <a href="#">filter</a>
      </div>
      <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            @foreach ($products as $item)
                <div class="searched-item">
                    <a href="detail/{{$item['id']}}">
                        <img class="trending-img" src="{{$item['gallery']}}">
                        <div class="">
                        <h2> {{$item['name']}} </h2>
                        <h4> {{$item['description']}} </h4>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
      </div>
    
</div>
@endsection