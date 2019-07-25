<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Repairo Products Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <!-- Nav Bar Starts-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Repairo</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navbar-right" style="margin-left:100px" >
                  <li class="nav-item">
                    <a class="nav-link" href="{{action('ProductController@create')}}">Add Products - Single<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{action('ProductController@comboCreate')}}">Add Products - Combo<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{action('ProductController@index')}}">View Products</a>
                  </li>
            </ul>
        </div>
  </nav>
  <!--End of Nav Bar-->
<!--View Products Starts-->
  <div style="margin:40px">
        <br />
        @if (\Session::has('success'))
          <div class="alert alert-info">
            <p>{{ \Session::get('success') }}</p>
          </div><br />
        @endif
        <table class="table table-striped table-hover" style="margin-top:30px">
          <thead class="">
            <tr>
              <p>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Product Stock</th>
                <th>Product Price</th>
                <th>Product Weight</th>
                <th>Product Combo Item</th>
                <th>Product Type</th>
              </p>  
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody class="tbody-light">
            @foreach($products as $product)
            <tr>
              <td>{{$product->p_code}}</td>
              <td>{{$product->p_name}}</td>
              <td>{{$product->p_stock}}</td>
              <td>{{$product->p_price}}</td>
              <td>{{$product->p_weight}}</td>
              <td>{{$product->p_choice1.'  '.$product->p_choice2}}</td>
              <td>{{$product->p_type}}</td>
              <td><a href="{{action('ProductController@edit', $product->id)}}" class="btn btn-primary">Edit</a></td>
              <td>
                  <form action="{{action('ProductController@destroy', $product->id)}}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
  </div>
  <!--View Products Ends-->
  </body>
</html>