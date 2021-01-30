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

            <div>
                @foreach($products as $product)
                <div class="card my-5">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="square" src="https://picsum.photos/200" alt="">
                                </div>
                                {{-- <div class="ml-2">
                                    <div class="h5 m-0">
                                    </div>
                                    <div class="h7 text-muted">
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text" id="name">
                            Product Name: {{ $product->name }}
                        </p>
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
        </div>
    </div>
</div>
@endsection
