<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Papelería la T@rea | Catálogo</title>
  <link rel="icon" href="/logo.png">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-amber-50 text-gray-800">

  <header class="bg-amber-400 border-b-4 border-purple-800">
    <div class="max-w-6xl mx-auto p-4 flex flex-col sm:flex-row items-center gap-4">
      <img src="/logo.png" alt="Papelería la T@rea" class="w-24 h-24 rounded-full border-4 border-purple-800 bg-white">
      <div class="text-center sm:text-left">
        <h1 class="text-3xl font-extrabold text-purple-900">Papelería la T@rea</h1>
        <p class="text-purple-900">Libretas, escritura, cargadores, cables y audífonos</p>
      </div>
    </div>
  </header>

  <section class="max-w-6xl mx-auto p-4">
    <div class="flex flex-wrap gap-2 mb-4">
      <input id="buscar" placeholder="Buscar producto..."
             class="border-2 border-purple-800 rounded-lg px-3 py-2 w-full sm:w-72">
      <select id="categoria" class="border-2 border-purple-800 rounded-lg px-3 py-2">
        <option value="">Todas las categorías</option>
        @foreach($categorias as $c)
          <option value="{{ $c }}">{{ $c }}</option>
        @endforeach
      </select>
    </div>

    <div id="grid" class="grid gap-5 grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
      @foreach($productos as $p)
        <div class="producto bg-white rounded-2xl shadow-md overflow-hidden flex flex-col border border-amber-200"
             data-nombre="{{ Str::lower($p->nombre . ' ' . $p->descripcion) }}"
             data-categoria="{{ $p->categoria }}">
          <img src="{{ $p->imagen }}" alt="{{ $p->nombre }}" loading="lazy"
               onerror="this.onerror=null;this.src='https://placehold.co/400x300/FFB400/4B2A9B?text={{ urlencode($p->categoria) }}'"
               class="w-full h-40 object-cover bg-amber-100">
          <div class="p-4 flex flex-col flex-1">
            <span class="text-xs font-semibold text-green-700 uppercase">{{ $p->categoria }}</span>
            <h2 class="font-bold leading-tight">{{ $p->nombre }}</h2>
            <p class="text-sm text-gray-600 flex-1 mt-1">{{ $p->descripcion }}</p>
            <p class="mt-2 text-xl font-extrabold text-orange-600">${{ number_format($p->precio, 2) }}</p>
            <a target="_blank"
               href="https://wa.me/525661151201?text={{ urlencode('Hola, me interesa: ' . $p->nombre) }}"
               class="mt-3 text-center bg-green-600 text-white font-semibold py-2 rounded-lg hover:bg-green-700">
              Pedir por WhatsApp
            </a>
          </div>
        </div>
      @endforeach
    </div>

    <p id="vacio" class="hidden text-center py-10">No se encontraron productos.</p>
  </section>

  <footer class="text-center text-sm text-purple-900 py-8">
    <p>Catálogo de demostración · © {{ date('Y') }} Papelería la T@rea</p>
    <a target="_blank"
       href="https://wa.me/525661151201?text={{ urlencode('Hola, vi la demo del catálogo y quiero uno para mi negocio') }}"
       class="inline-block mt-3 bg-purple-800 text-white font-semibold px-5 py-2 rounded-lg hover:bg-purple-900">
      ¿Quieres un catálogo así para tu negocio? Escríbeme
    </a>
  </footer>

  <script>
    const buscar = document.getElementById('buscar');
    const categoria = document.getElementById('categoria');
    const tarjetas = document.querySelectorAll('.producto');
    const vacio = document.getElementById('vacio');

    function filtrar() {
      const q = buscar.value.toLowerCase().trim();
      const c = categoria.value;
      let visibles = 0;
      tarjetas.forEach(t => {
        const ok = t.dataset.nombre.includes(q) && (!c || t.dataset.categoria === c);
        t.classList.toggle('hidden', !ok);
        if (ok) visibles++;
      });
      vacio.classList.toggle('hidden', visibles > 0);
    }

    buscar.addEventListener('input', filtrar);
    categoria.addEventListener('change', filtrar);
  </script>
</body>
</html>