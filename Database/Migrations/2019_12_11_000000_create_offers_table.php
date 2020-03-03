<?php

use Illuminate\Database\Schema\Blueprint;
//----- models -----

//----- bases ----
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateOffersTable extends XotBaseMigration {
    //use XotBaseMigrationTrait;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //-- CREATE --
        if (! $this->tableExists()) {
            $this->getConn()->create(
                $this->getTable(),
                function (Blueprint $table) {
                    $table->increments('post_id');
                    $table->integer('product_post_id')
                        ->references('post_id')->on('products');
                    $table->decimal('base_price', 10, 3)->nullable();
                    $table->date('date_start');
                    $table->date('date_end');
                    $table->decimal('discount_value', 10, 3)->nullable();
                    $table->string('discount_unit', 2)->nullable();
                    $table->decimal('price', 10, 3)->nullable();
                    $table->string('coupon_code', 32)->nullable();
                    $table->integer('units_in_stock')->nullable();

                    $table->text('note')->nullable();
                }
            );
        }//end create

        //-- UPDATE --
        $this->getConn()->table(
            $this->getTable(),
            function (Blueprint $table) {
                if (! $this->hasColumn('updated_at')) {
                    $table->timestamps();
                }
                if (! $this->hasColumn('updated_by')) {
                    $table->string('updated_by')->nullable()->after('updated_at');
                    $table->string('created_by')->nullable()->after('created_at');
                }
            }
        ); //end update
    }

    //end function up
}
