<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Ejemplo de HTML5 con Bootstrap">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Consultorio Clínico</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .galeria-collage img {
      width: 100%;
      height: auto;
      margin-bottom: 1rem;
      border-radius: 10px;
    }
    .aside-img {
      width: 100%;
      height: auto;
      border-radius: 10px;
    }
    .map-link {
      text-decoration: none;
      font-weight: bold;
    }
  </style>
</head>
<body class="bg-light">

  <div class="container py-4">

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4 rounded shadow">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Consultorio Clínico</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menuNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="Index.html">Quiropodia</a></li>
            <li class="nav-item"><a class="nav-link" href="Index.html">Pediatría</a></li>
            <li class="nav-item"><a class="nav-link" href="Index.html">Cardiología</a></li>
            <li class="nav-item"><a class="nav-link" href="Index.html">Dermatología</a></li>
            <li class="nav-item"><a class="nav-link" href="Index.html">Medicina General</a></li>
            <li class="nav-item"><a class="nav-link" href="InicioConsultorio.html">Login</a></li>

          </ul>
        </div>
      </div>
    </nav>

    <!-- Contenido principal -->
    <div class="row">
      <div class="col-lg-8">
        <!-- Artículo 1 -->
        <div class="card mb-4">
          <div class="card-header bg-secondary text-white">
            <h5 class="mb-0">Patologías - Onicopatías más comunes</h5>
          </div>
          <div class="card-body">
            <div class="row g-2 galeria-collage">
              <div class="col-md-6"><img src="../imagenes/Fondo.png" alt="Fondo"></div>
              <div class="col-md-6"><img src="../imagenes/Pie1.png" alt="Pie1"></div>
              <div class="col-md-6"><img src="../imagenes/Pie2.png" alt="Pie2"></div>
              <div class="col-md-6"><img src="../imagenes/Pie3.png" alt="Pie3"></div>
              <div class="col-md-6"><img src="../imagenes/Pie4.png" alt="Pie4"></div>
            </div>
            <p class="mt-3 text-muted">
              Derechos de autor <cite>MMC Quiropodia</cite> |
              <time datetime="2025-06-28">Publicado: 28-06-2025</time>
            </p>
          </div>
        </div>

        <!-- Artículo 2 -->
        <div class="card mb-4">
          <div class="card-body">
            <img src="../imagenes/Flyer_MMC.png" alt="Flyer" class="img-fluid rounded mb-3">
            <figcaption class="mb-2">🧠 Lo que el cerebro ignora, los ojos no lo ven!</figcaption>
            <figcaption class="mb-2">📅 Agenda tu cita! - 900 132456</figcaption>
            <h5 class="mt-3">También tenemos productos para el cuidado diario de tus pies!</h5>
            <h6 class="mt-3">
              <a href="https://maps.app.goo.gl/EHS3DWV9aNiaHRBw8" class="map-link text-success" target="_blank">
                📍 Resultados desde la primera cita! 
              </a>
            </h6>

            <!-- Comentarios -->
            <!---<form class="mt-4">
              <label for="observaciones" class="form-label">Déjanos tu comentario</label>
              <textarea class="form-control" id="observaciones" rows="3" placeholder="Escribí tu comentario aquí..."></textarea>
              <button type="submit" class="btn btn-outline-primary mt-2">Aceptar</button>
            </form>-->
          </div>
        </div>
      </div>

      <!-- Aside / lateral -->
      <div class="col-lg-4">
        <div class="card shadow mb-4">
          <div class="card-body">
            <blockquote class="blockquote mb-3">
              <p>👩‍⚕️ Profesional en Quiropodia</p>
            </blockquote>
            <img src="../imagenes/Profesional.png" alt="Profesional" class="aside-img mb-2">
            <figcaption>💢 A quien le duelen los pies, le duele todo!</figcaption>
            <figcaption class="mt-2">📞 Agendá tu cita! - 900 132456</figcaption>
          </div>
        </div>
      </div>
    </div>

    <!-- Pie de página -->
    <footer class="text-center text-muted py-3">
      <small>&copy; 2025 Derechos Reservados - MMC Quiropodia</small>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
