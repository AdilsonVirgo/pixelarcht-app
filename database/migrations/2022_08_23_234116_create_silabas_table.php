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
        Schema::create('silabas', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('silabas');
    }
};
/*Palabra monosílaba: aquella palabra con una sola sílaba. Por ejemplo: sol, buey.
Palabra bisílaba: aquella palabra con dos sílabas. Por ejemplo: nube, bolso.
Palabra trisílaba: aquella palabra con tres sílabas. Por ejemplo: huracán, teclado.
Palabra tetrasílaba: aquella palabra con cuatro sílabas. Por ejemplo: catálogo, escopeta.
Palabra pentasílaba: aquella palabra con cinco sílabas. Por ejemplo: oficialidad.
Palabra hexasílabas: aquella palabra con seis sílabas. Por ejemplo: responsabilidad.
Palabra heptasílabas: aquella palabra con siete sílabas. Por ejemplo: piripitiflaútica.
Palabra octosílabas: aquella palabra con ocho sílabas. Por ejemplo: epigramáticamente.
Palabra eneasílabas: aquella palabra con nueve sílabas. Por ejemplo: otorrinolaringólogo.
Palabra decasílabas: aquella palabra con diez sílabas. Por ejemplo: electroencefalografista.
Palabra dodecasílabas: aquella palabra con doce sílabas. Por ejemplo: Electroencefalográficamente.
*/
