<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddArabicColumns extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
    Schema::table('services', function (Blueprint $table) {
        $table->string('title_ar')->nullable();
        $table->text('content_ar')->nullable();
    });

    Schema::table('news', function (Blueprint $table) {
        $table->string('title_ar')->nullable();
        $table->text('content_ar')->nullable();
    });

    Schema::table('modern-laws', function (Blueprint $table) {
        $table->string('title_ar')->nullable();
        $table->text('content_ar')->nullable();
    });

    Schema::table('teams', function (Blueprint $table) {
        $table->string('name_ar')->nullable();
        $table->string('designation_ar')->nullable();
        $table->text('content_ar')->nullable();
    });

    Schema::table('publications', function (Blueprint $table) {
        $table->boolean('show_in_english')->nullable();
        $table->boolean('show_in_arabic')->nullable();
    });
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
    Schema::table('services', function (Blueprint $table) {
        $table->dropColumn(['title_ar','content_ar']);
    });

    Schema::table('news', function (Blueprint $table) {
        $table->dropColumn(['title_ar','content_ar']);
    });

    Schema::table('modern-laws', function (Blueprint $table) {
        $table->dropColumn(['title_ar','content_ar']);
    });

    Schema::table('teams', function (Blueprint $table) {
        $table->dropColumn(['name_ar','designation_ar','content_ar']);
    });

    Schema::table('publications', function (Blueprint $table) {
        $table->dropColumn(['show_in_english','show_in_arabic']);
    });
}
}
