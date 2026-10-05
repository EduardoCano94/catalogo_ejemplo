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
            ['Libreta profesional raya 100 hojas', 'Espiral, pasta dura, tamaño profesional', 45, 'Libretas', 'libreta-raya.svg'],
            ['Libreta profesional cuadro grande', 'Espiral, 100 hojas, ideal para matemáticas', 45, 'Libretas', 'libreta-cuadro.svg'],
            ['Libreta italiana forma pequeña', 'Cosida, 100 hojas, raya', 28, 'Libretas', 'libreta-italiana.svg'],
            ['Libreta de dibujo', 'Hojas blancas gruesas, 50 hojas', 55, 'Libretas', 'libreta-dibujo.svg'],
            ['Libreta de bolsillo', 'Tamaño compacto, 80 hojas', 20, 'Libretas', 'libreta-bolsillo.svg'],
            ['Libreta con diseño', 'Pasta dura ilustrada, 80 hojas', 65, 'Libretas', 'libreta-diseno.svg'],

            ['Bolígrafo azul', 'Punto mediano, tinta de secado rápido', 8, 'Escritura', 'boligrafo-azul.svg'],
            ['Bolígrafo negro', 'Punto mediano, escritura suave', 8, 'Escritura', 'boligrafo-negro.svg'],
            ['Pack 12 lapiceros colores', 'Tinta de colores surtidos', 85, 'Escritura', 'lapiceros-colores.svg'],
            ['Lápiz HB (caja 12 pzas)', 'Madera, con goma', 60, 'Escritura', 'lapiz-hb.svg'],
            ['Marcatextos fluorescente', 'Punta biselada, varios colores', 18, 'Escritura', 'marcatextos.svg'],

            ['Cargador de pared USB', 'Entrada USB normal, 2.1A', 90, 'Cargadores', 'cargador-usb.svg'],
            ['Cargador de pared tipo C', 'Carga rápida 20W, entrada USB-C', 180, 'Cargadores', 'cargador-tipoc.svg'],
            ['Cargador para auto', 'Doble puerto USB', 110, 'Cargadores', 'cargador-auto.svg'],

            ['Cable USB a Micro USB', '1 metro, carga y datos', 55, 'Cables', 'cable-micro.svg'],
            ['Cable USB a tipo C', '1 metro, carga rápida', 75, 'Cables', 'cable-usb-tipoc.svg'],
            ['Cable tipo C a tipo C', '1 metro, carga rápida y datos', 120, 'Cables', 'cable-tipoc-tipoc.svg'],
            ['Cable USB a Lightning', '1 metro, para iPhone', 130, 'Cables', 'cable-lightning.svg'],

            ['Audífonos Bluetooth inalámbricos', 'Con estuche de carga y micrófono', 250, 'Audífonos', 'audifonos-bt.svg'],
            ['Audífonos diadema Bluetooth', 'Plegables, hasta 8 hrs de batería', 320, 'Audífonos', 'audifonos-diadema.svg'],
            ['Audífonos con cable entrada normal', 'Jack 3.5 mm con micrófono', 60, 'Audífonos', 'audifonos-jack.svg'],
            ['Audífonos con cable tipo C', 'Entrada USB-C con micrófono', 110, 'Audífonos', 'audifonos-tipoc.svg'],
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
