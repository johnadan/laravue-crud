@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>    
    {{-- <div class="row justify-content-center .row-cols-3">
        <div class="col-md-8">
            <div>
                @foreach($products as $product)
                <div class="card my-5" style="width: 15rem;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <img src="https://picsum.photos/200" alt="" class="square card-img-top">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Product Name: {{ $product->name }}</h5>
                        <p class="card-text" id="category">
                            Product Category: {{ $product->category }}
                        </p>
                        <p class="card-text" id="description">
                            Product Description: {{ $product->description }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>  
        {!! $products->links() !!} 
        </div>
    </div> --}}
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <div class="col">
        @foreach($products as $product)
          <div class="card my-5">
            <img src="https://picsum.photos/200" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Product Name: {{ $product->name }}</h5>
              <p class="card-text" id="category">Product Category: {{ $product->category }}</p>
              <p class="card-text">Product Description: {{ $product->description }}</p>
            </div>
          </div>
        @endforeach  
        </div>
    </div>

</div>
@endsection
