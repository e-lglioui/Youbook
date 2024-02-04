
<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQuantiteToLivresTable extends Migration
{
    public function up()
    {
        Schema::table('livres', function (Blueprint $table) {
            $table->integer('quantite')->default(0);
        });
    }

    public function down()
    {
        Schema::table('livres', function (Blueprint $table) {
            $table->dropColumn('quantite');
        });
    }
}
