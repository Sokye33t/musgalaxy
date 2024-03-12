@extends('layouts.app')

@section('title', 'MusGalaxy - лучший проводник в мир музыки')

@section('content')
<header class="text-center mb-4">
    <h2 class="heading">Каталог товаров</h2>
</header>
<div class="catalog row" style="">
    <div class="search col-md-12">
      <form method="GET">
        <div class="input-group mb-3">
            <input
                type="text"
                name="search"
                value="{{ request()->get('search') }}"
                class="form-control"
                placeholder="Search..."
                aria-label="Search"
                aria-describedby="button-addon2">
            <button class="btn" type="submit" id="button-addon2">Search</button>
        </div>
    </form>
    </div>
    <div class="category d-flex flex-column col-md-3" style="padding-left: 0;">
      <div class="accordion accordion-flush" id="accordionFlushExample">
        @foreach ($categories as $category)
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$category->id}}" aria-expanded="false" aria-controls="flush-collapseOne">
              {{ $category->name }}
            </button>
          </h2>
          <div id="flush-collapse{{$category->id}}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            @if (count($category->subcategories)>0)
            @foreach ($category->subcategories as $subcategory)
            <div class="accordion-body text-end">{{ $subcategory->name }}</div>
            @endforeach
            @else
            <div class="accordion-body text-end">nothing</div>
            @endif 
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="product col-md-9 row data-table" style="margin-left: 1px">
        @foreach ($products as $product)
        <div class="card" style="width: 18rem; margin-left: 10px; margin-bottom: 5px">
          <img src="{{ $product->photo }}" class="card-img-top" style="width" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->category->name}}</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">{{ $product->price }} руб.</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>
        </div>
        @endforeach
    </div>
</div>
@endsection