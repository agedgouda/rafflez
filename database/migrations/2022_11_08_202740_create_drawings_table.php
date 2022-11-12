<?php

use App\Models\Category;
use App\Models\Prize;
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
        Schema::create('drawings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Prize::class);
            $table->foreignIdFor(Category::class);
            $table->timestamp('draw_date');
            $table->smallInteger('max_tickets');
            $table->decimal('ticket_price');
            $table->softDeletes();
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
        Schema::dropIfExists('drawings');
    }
};
