<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Crud Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
      <div class="bg-dark">
          <h5 class="text-white text-center">Simple Laravel Crud Application</h5>
     </div>
     <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-10">
         <div class="card border-0 shadow-lg">
          <div class="card-header bg-dark">
            <h5 class="text-white">Create Product</h3>
</div>
<div class="card-body">
  <form action="{{route('products.store')}}" method="post" enctype= "multipart/form-data" >
@csrf
  <div class="mb-3">
  <label class="form-label h5" >Name</label>
  <input type="text" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Enter Name"></input>
  @error('name')
  <p class="invalid-feedback">{{$message}}</p>
  @enderror
  </div>
  <div class="mb-3">
  <label class="form-label h5" >SKU</label>
  <input type="text" name="sku" class="form-control form-control-lg @error('sku') is-invalid @enderror" placeholder="Enter SKU"></input>
  @error('sku')
  <p class="invalid-feedback">{{$message}}</p>
  @enderror
</div>
<div class="mb-3">
  <label class="form-label h5" >Price</label>
  <input type="text" name="price"class="form-control form-control-lg @error('price') is-invalid @enderror" placeholder="Enter Price"></input>
  @error('price')
  <p class="invalid-feedback">{{$message}}</p>
  @enderror
</div>
<div class="mb-3">
  <label class="form-label h5" >Description</label>
  <textarea name="description" class="form-control form-control-lg" rows="3" cols="20" placeholder="Enter Description"></textarea>
</div>
<div class="mb-3">
  <label class="form-label h5" >Image</label>
  <input type="file" name="image" class="form-control form-control-lg" placeholder="Enter Description"></input>
</div>
<div class="d-grid">
  <button class="btn btn-lg btn-primary">Submit</button>
</div>
</form>
</div>
</div> 
</div>
</div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>