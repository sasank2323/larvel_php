<!-- <h1>{{$rollnumber}}</h1> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        span {
           
            color: black;
            padding: 5px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
 @include('common.index')
<!-- php artisan make:component MessageBanner
this is the command to make a component after making use php artisan serve to run the server -->
 <x-message-banner msg="hi this is message banner component from ss" class="blue" />

<section>
<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</section>

@for($i=0;$i<4;$i++)
<h1>{{$i}} </h1>
@endfor
@foreach($user as $s)
<h2>{{$s}}</h2>
@endforeach

@include('common.footer', ['ss' =>"1"])
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>