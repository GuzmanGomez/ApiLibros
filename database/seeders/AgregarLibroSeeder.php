<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;
use Illuminate\Support\Facades\DB;

class AgregarLibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //nombres de autores
        $autores = ["MIGUEL DE CERVANTES","MARQUÉS DE SADE","GOETHE","JANE AUSTEN","MARY SHELLEY",
        "VICTOR HUGO","CHARLES DICKENs","HERMAN MELVILLE",];
        $titulo = ["El Principito","El Código Da Vinci","El Principito","El Código Da Vinci","El Principito"];
        $editorial = ["Penguin","Penguin","Penguin","Penguin","Penguin"];
        $edicion = ["1ra Edicion","2ra Edicion","3ra Edicion","3ra Edicion","5ra Edicion"];
        $año = ["1899","1779","1559","1499","1299"];
        $categoria = ["Novela","Novela","Novela","Novela","Novela"];
        $paginas = ["200","20","500","1400","800"];
        $precio = ["1011","450","760","1021","103"];
        for($i=0;$i<500;$i++){
            DB::table('libros')->insert([
                'Autor' => $autores[rand(0,count($autores)-1)],
                'Titulo' => $titulo[rand(0,count($titulo)-1)],
                'Editorial' => $editorial[rand(0,count($editorial)-1)],
                'Edicion' => $edicion[rand(0,count($edicion)-1)],
                'Año' => $año[rand(0,count($año)-1)],
                'Categoria' => $categoria[rand(0,count($categoria)-1)],
                'Paginas' => $paginas[rand(0,count($paginas)-1)],
                'Precio' => $precio[rand(0,count($precio)-1)],
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ]);
        }
        
    }
}
