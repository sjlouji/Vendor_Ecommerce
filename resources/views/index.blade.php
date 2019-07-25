<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Products</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
 
  </head>
  <body>
  <!-- Nav Bar Starts-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Repairo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" style="margin-left:100px" >
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
  <!--Start of the form -->
  <div style="margin:50px">
      <h2 style="margin-left:708px;margin-bottom:20px">Add Products</h2>
      <form method="post" action="{{url('add')}}">
          @csrf
          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Carcompany">Product Code:</label>
              <input type="text" class="form-control" name="p_code">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Model">Product Name:</label>
              <input type="text" class="form-control" name="p_name">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Price">Product Weight:</label>
              <input type="text" class="form-control" name="p_weight">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Price">Product Stock:</label>
              <input type="text" class="form-control" name="p_stock">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Price">Product Price:</label>
              <input type="text" class="form-control" name="p_price">
            </div>
          </div>
            <div class="row">
              <div class="col-md-4"></div>
                <div class="form-group col-md-4" style="margin-left:450px">
                  <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
        </form>
    </div>
  </div>
  <!--End of the form -->
  </body>
</html>