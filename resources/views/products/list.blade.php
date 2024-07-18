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
        @if(Session::has('success'))
            <div class="col-md-10 alert alert-success">
                {{Session::get('success')}}
           </div>
        @endif

        <div class="col-md-10">
         <div class="card border-0 shadow-lg">
          <div class="card-header bg-dark">
            <h5 class="text-white">Products</h3>
</div>
<div class="card-body">
 
</div>
</div> 
</div>
</div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>