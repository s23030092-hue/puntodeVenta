
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarRolYNombreUsuarioAUsersTable extends Migration
{
    public function up()
    {
        // Las columnas ya existen en la base de datos.
        // No es necesario agregarlas otra vez.
    }

    public function down()
    {
        // No eliminar columnas que ya utiliza la aplicación.
    }
}
