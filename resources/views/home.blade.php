@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row ustify-content-center">
      <form action="{{route('filter')}}" method="get" accept-charset="utf-8" class="form-inline">
        <div class="form-group mx-sm-3 mb-2">
            <select name="category" class="form-control">
              <option value="0">All</option>
              @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <input type="text" name="model" class="form-control" placeholder="Model">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <input type="number" name="price_start" class="form-control" placeholder="Price">
        </div>
        Between
        <div class="form-group mx-sm-3 mb-2">
            <input type="number" name="price_end" class="form-control" placeholder="Price">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <button class="btn-primary btn btn-info">Search</button>
        </div>          
      </form>
    </div>
    </div>
    <div class="row" style="padding-top: 30px;">
        <div class="card-deck" style="width: 100%">
            @forelse($items as $item)
            <div class="col-md-4" style="padding-bottom:10px ">
              <div class="card">
                <div>
                    <img class="card-img-top" src="{{url($item->image_link)}}" alt="Card image cap" style="min-height: 250px ; max-height: 250px">
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{$item->brand}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$item->model}}</h6>
                  <p class="card-text"></p>
                  <a href="{{ route('view-item', $item->id) }}" class="btn btn-sm btn-info">View</a>
                </div>
                <div class="card-footer">
                  <small class="text-muted"><b>{{$item->price.' LKR'}}</b></small>
                </div>
              </div>            
            </div>
            @empty
        </div>  
        <div class="col-md-12" style="margin-top: 10px">
          <div class="alert alert-info">
            No items available.
          </div>
        </div>
        @endforelse
    </div>
    <div class="row" style="padding-top: 20px">
        {{ $items->links()}}
    </div>
</div>
@endsection