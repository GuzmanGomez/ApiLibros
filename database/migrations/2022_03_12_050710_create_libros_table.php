<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*  $autores = ["MIGUEL DE CERVANTES","MARQUÉS DE SADE","GOETHE","JANE AUSTEN","MARY SHELLEY",
        "VICTOR HUGO","CHARLES DICKENs","HERMAN MELVILLE",];
        $titulo = ["El Principito","El Código Da Vinci","El Principito","El Código Da Vinci","El Principito"];
        $editorial = ["Penguin","Penguin","Penguin","Penguin","Penguin"];
        $edicion = ["1ra Edicion","2ra Edicion","3ra Edicion","3ra Edicion","5ra Edicion"];
        $año = ["1899","1779","1559","1499","1299"];
        $categoria = ["Novela","Novela","Novela","Novela","Novela"];
        $paginas = ["200","20","500","1400","800"];
        $precio = ["1011","450","760","1021","103"];*/
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('Autor');
            $table->string('Titulo');
            $table->string('Editorial');
            $table->string('Edicion');
            $table->string('Año');
            $table->string('Categoria');
            $table->string('Paginas');
            $table->string('Precio');                        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
};
