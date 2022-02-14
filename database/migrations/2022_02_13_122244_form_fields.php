<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormFields extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {

		Schema::create('form_fields', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('form_id');
			$table->tinyInteger('field_type');
			$table->string('field_label');
			$table->string('placeholder');
			$table->tinyInteger('required');
			$table->mediumInteger('max');
			$table->mediumInteger('min');
			$table->timestamps();
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('form_fields');
	}
}
