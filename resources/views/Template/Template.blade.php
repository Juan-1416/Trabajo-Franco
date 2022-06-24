<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ferreteria</title>
  </head>
  <body>
    <ul class="nav justify-content-le">

        <li class="nav-item">
          <a class="nav-link" href="{{url('http://127.0.0.1:8000')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{'employee/create'}}" method="post">Empleado</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{'quote/create'}}" method="post">Citas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{'waytopay/create'}}" method="post">Forma de pago</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'service/create'}}" method="post">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'promotion/create'}}" method="post">Promociones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'Ejercicio4'}}" method="post">Salir</a>
          </li>
      </ul>
      @yield('plantillaweb')
    </div>
