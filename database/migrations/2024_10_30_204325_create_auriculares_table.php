<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudicularesTable extends Migration
{
    public function up()
    {
        Schema::create('audiculares', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('marca');
            $table->string('modelo');
            $table->decimal('precio', 8, 2);
            $table->timestamps();
        });

        DB::table('audiculares')->insert([
            ['nombre' => 'Audífono XYZ', 'marca' => 'Marca Ejemplo', 'modelo' => 'Modelo 123', 'precio' => 99.99],
            ['nombre' => 'Audífono ABC', 'marca' => 'Otra Marca', 'modelo' => 'Modelo 456', 'precio' => 149.99],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('audiculares');
    }
}

