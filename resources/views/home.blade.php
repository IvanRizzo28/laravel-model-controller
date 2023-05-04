@extends('layout.app')

@section('main')
    <div class="container">
        <h1 class="text-center mb-4">I miei film</h1>
        <div class="row gy-3">
            @foreach ($tmp as $item)
                <div class="col-12 col-md-4 col-lg-3">

                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$item->title}}</h5>
                          <p class="card-text">{{ $item->nationality }} - {{ $item->date }} - {{ $item->vote }}</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>
@endsection
