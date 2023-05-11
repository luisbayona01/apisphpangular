<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'usuario';

    /**
     * Run the migrations.
     * @table usuario
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->integer('edad');
            $table->string('foto', 100)->nullable()->default(null);
            $table->enum('tipo_documento', ['Cedula', 'NIT', 'RUC', 'Otro']);
            $table->integer('id_rol')->unsigned();
            $table->index(["id_rol"], 'id_rol');
          $table->foreign('id_rol')->references('id')->on('rol')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
