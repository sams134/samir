<?php

use App\Models\Internal\Material;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('name',150);
            $table->text('description')->nullable();
            $table->enum('product_type',[Material::PRODUCT_RE_SELL_RAW_MATERIAL,
                                         Material::PRODUCT_RE_SELL_PRODUCT,
                                         Material::PRODUCT_BUYABLE_RAW_MATERIAL,
                                         Material::PRODUCT_BUYABLE_INPUT,
                                         Material::PRODUCT_SELLABLE]);
            $table->double('stock')->default(0);
            $table->double('min')->default(0);
            $table->double('max')->default(1);
            
            $table->unsignedBigInteger('used_material_id')->nullable();

            $table->unsignedBigInteger('material_type_id')->nullable();
            $table->unsignedBigInteger('unit_id')->nullable();

            $table->foreign('material_type_id')->references('id')->on('material_types')->onDelete('set null');
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('set null');


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
        Schema::dropIfExists('materials');
    }
}
