<!doctype html> 
<html lang="en"> 
<head> 
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
rel="stylesheet" crossorigin="anonymous" /> 
  <title>@yield('title', 'BikeTrek')</title> 
</head> 
<body> 
  <!-- header --> 
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4"> 
    <div class="container"> 
      <a class="navbar-brand" href="#">Fondo de Bikini</a> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs
target="#navbarNavAltMarkup" 
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
      </button> 
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> 
        <div class="navbar-nav ms-auto"> 
          <a class="nav-link active" href="{{ route('fish.create') }}"">Crear</a>
          <a class="nav-link active" href="{{ route('fish.index') }}">Peces</a>
          <a class="nav-link active" href="{{ route('fish.stats') }}">Estadísticas</a>
        </div> 
      </div> 
    </div> 
  </nav> 
 
  <header class="masthead bg-primary text-white text-center py-4"> 
    <div class="container d-flex align-items-center flex-column"> 
      <h2>@yield('subtitle', 'Fondo de Bikini')</h2> 
    </div> 
  </header> 
  <!-- header --> 

  <div class="container my-4"> 
    @yield('content') 
  </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
    crossorigin="anonymous"> 
    </script> 
</body> 
</html> 