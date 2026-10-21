<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Inicio</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Header -->
  <header class="bg-white shadow">
    <div class="container mx-auto flex justify-between items-center p-4">
      <h1 class="text-2xl font-bold text-blue-600">MiSitio</h1>
      <nav class="space-x-6">
        <a href="#" class="text-gray-700 hover:text-blue-600">Inicio</a>
        <a href="#" class="text-gray-700 hover:text-blue-600">Servicios</a>
        <a href="#" class="text-gray-700 hover:text-blue-600">Contacto</a>
      </nav>
    </div>
  </header>

  <!-- Seccion -->
  <section class="bg-blue-600 text-white py-20">
    <div class="container mx-auto text-center">
      <h2 class="text-4xl font-bold mb-4">Bienvenido</h2>
      <p class="text-lg mb-6">Tu solución rápida y moderna.</p>
      <a href="#" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-200">
        Empezar
      </a>
    </div>
  </section>

  <!-- Caracteristicas -->
  <section class="py-16">
    <div class="container mx-auto grid md:grid-cols-3 gap-8 text-center">
      <div class="p-6 bg-white shadow rounded-lg">
        <i class="fas fa-bolt text-4xl text-blue-600 mb-4"></i>
        <h3 class="text-xl font-bold mb-2">Rápido</h3>
        <p>Optimizado para un rendimiento ágil.</p>
      </div>
      <div class="p-6 bg-white shadow rounded-lg">
        <i class="fas fa-mobile-alt text-4xl text-blue-600 mb-4"></i>
        <h3 class="text-xl font-bold mb-2">Responsivo</h3>
        <p>Diseño adaptable a cualquier dispositivo.
        Optimizado con Tailwind. </p>
      </div>
      <div class="p-6 bg-white shadow rounded-lg">
        <i class="fas fa-lock text-4xl text-blue-600 mb-4"></i>
        <h3 class="text-xl font-bold mb-2">Seguro</h3>
        <p>Construido con buenas prácticas de desarrollo.</p>
      </div>
      <!-- NUEVA Característica 5 -->
      <div class="p-6 bg-white shadow rounded-lg">
        <i class="fas fa-chart-line text-4xl text-blue-600 mb-4"></i>
        <h3 class="text-xl font-bold mb-2">Escalable</h3>
        <p>Preparado para crecer junto a las necesidades de tu negocio.</p>
      </div>
    </div>
  </section>

  <!-- Tecnologias -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto text-center mb-10">
      <h2 class="text-3xl font-bold text-blue-600">Tecnologías</h2>
      <p class="text-gray-600 mt-2">Herramientas modernas que usamos en nuestros proyectos</p>
    </div>
    <div class="container mx-auto grid md:grid-cols-4 gap-8 text-center">
      <div class="p-6 bg-white shadow rounded-lg">
        <i class="fab fa-html5 text-5xl text-orange-500 mb-4"></i>
        <h3 class="text-xl font-semibold">HTML5</h3>
        <p class="text-gray-600">Estructura semántica y moderna para la web.</p>
      </div>
      <div class="p-6 bg-white shadow rounded-lg">
        <i class="fab fa-css3-alt text-5xl text-blue-500 mb-4"></i>
        <h3 class="text-xl font-semibold">CSS3</h3>
        <p class="text-gray-600">Estilos avanzados y animaciones fluidas.</p>
      </div>
      <div class="p-6 bg-white shadow rounded-lg">
        <i class="fab fa-react text-5xl text-cyan-500 mb-4"></i>
        <h3 class="text-xl font-semibold">React</h3>
        <p class="text-gray-600">Componentes reutilizables y UI eficiente.</p>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto flex justify-center space-x-6">
      <a href="#" class="hover:text-blue-400"><i class="fab fa-facebook-f"></i></a>
      <a href="#" class="hover:text-blue-400"><i class="fab fa-twitter"></i></a>
      <a href="#" class="hover:text-blue-400"><i class="fab fa-instagram"></i></a>
    </div>
    <p class="text-center mt-4 text-sm">
        <i class="fas fa-regular fa-copyright"></i> 2026
    </p>
  </footer>

</body>
</html>


