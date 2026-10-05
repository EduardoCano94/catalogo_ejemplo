<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        $productos = [
            // [nombre, descripcion, precio, categoria, imagen]
            ['Libreta profesional raya 100 hojas', 'Espiral, pasta dura, tamaño profesional', 45, 'Libretas', 'libreta-raya.jpg'],
            ['Libreta profesional cuadro grande', 'Espiral, 100 hojas, ideal para matemáticas', 45, 'Libretas', 'libreta-cuadro.jpg'],
            ['Libreta italiana forma pequeña', 'Cosida, 100 hojas, raya', 28, 'Libretas', 'libreta-italiana.jpg'],
            ['Libreta de dibujo', 'Hojas blancas gruesas, 50 hojas', 55, 'Libretas', 'libreta-dibujo.jpg'],
            ['Libreta de bolsillo', 'Tamaño compacto, 80 hojas', 20, 'Libretas', 'libreta-bolsillo.jpg'],
            ['Libreta con diseño', 'Pasta dura ilustrada, 80 hojas', 65, 'Libretas', 'libreta-diseno.jpg'],

            ['Bolígrafo azul', 'Punto mediano, tinta de secado rápido', 8, 'Escritura', 'boligrafo-azul.jpg'],
            ['Bolígrafo negro', 'Punto mediano, escritura suave', 8, 'Escritura', 'boligrafo-negro.jpg'],
            ['Pack 12 lapiceros colores', 'Tinta de colores surtidos', 85, 'Escritura', 'lapiceros-colores.jpg'],
            ['Lápiz HB (caja 12 pzas)', 'Madera, con goma', 60, 'Escritura', 'lapiz-hb.jpg'],
            ['Marcatextos fluorescente', 'Punta biselada, varios colores', 18, 'Escritura', 'marcatextos.jpg'],

            ['Cargador de pared USB', 'Entrada USB normal, 2.1A', 90, 'Cargadores', 'cargador-usb.jpg'],
            ['Cargador de pared tipo C', 'Carga rápida 20W, entrada USB-C', 180, 'Cargadores', 'cargador-tipoc.jpg'],
            ['Cargador para auto', 'Doble puerto USB', 110, 'Cargadores', 'cargador-auto.jpg'],

            ['Cable USB a Micro USB', '1 metro, carga y datos', 55, 'Cables', 'cable-micro.jpg'],
            ['Cable USB a tipo C', '1 metro, carga rápida', 75, 'Cables', 'cable-usb-tipoc.jpg'],
            ['Cable tipo C a tipo C', '1 metro, carga rápida y datos', 120, 'Cables', 'cable-tipoc-tipoc.jpg'],
            ['Cable USB a Lightning', '1 metro, para iPhone', 130, 'Cables', 'cable-lightning.jpg'],

            ['Audífonos Bluetooth inalámbricos', 'Con estuche de carga y micrófono', 250, 'Audífonos', 'audifonos-bt.jpg'],
            ['Audífonos diadema Bluetooth', 'Plegables, hasta 8 hrs de batería', 320, 'Audífonos', 'audifonos-diadema.jpg'],
            ['Audífonos con cable entrada normal', 'Jack 3.5 mm con micrófono', 60, 'Audífonos', 'audifonos-jack.jpg'],
            ['Audífonos con cable tipo C', 'Entrada USB-C con micrófono', 110, 'Audífonos', 'audifonos-tipoc.jpg'],
        ];

        foreach ($productos as [$nombre, $descripcion, $precio, $categoria, $imagen]) {
            Producto::create([
                'nombre' => $nombre,
                'descripcion' => $descripcion,
                'precio' => $precio,
                'categoria' => $categoria,
                'imagen' => '/img/' . $imagen,
            ]);
        }
    }
}