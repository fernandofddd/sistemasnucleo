<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://bootswatch.com/5/morph/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('Menu')}}"><img src="{{asset('Logo1.png')}}" height = "100" width="200"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor04" aria-controls="navbarColor04" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor04">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route('Inscripcion')}}">Inscripcion
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('AlumnosInscritos')}}">Alumnos Inscritos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('RegistroMaterias')}}">Registro de Materias <br>&nbsp &nbsp &nbsp Y Secciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('MateriasRegistradas')}}">Mostrar Materias <br>&nbsp &nbsp &nbsp y Registros</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div id="contenido">
    @yield('contenido')
  </div>
</body>
</html>