@extends('products.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Panel To Create, Delete, Modify, or Show products</h2>
            </div>
            <div class="col-md--d">
                <form action="/search" method="get">
                    <div class="form-group">
                        <input type="search" name="search" class="form-control" placeholder="Filter the ads">
                        <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary">Search</button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/">PubliSimple</a>
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                <a class="btn btn-success" href="/products">Reset Filter</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th>Price</th>
            <th>Localisation</th>
            <th>Pictures</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->localisation }}</td>
            <td>img{{ $product->pictures }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!}
      
@endsection