<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::table('news', function (Blueprint $table) {
            $table->string('image_extension')->nullable()->after('has_image')->default('png');
        });
        Schema::table('sales', function (Blueprint $table) {
            $table->string('image_extension')->nullable()->after('has_image')->default('png');
        });
        Schema::table('site_pages', function (Blueprint $table) {
            $table->string('image_extension')->nullable()->after('has_image')->default('png');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        //
        try {
            Schema::table('news', function (Blueprint $table) {
                $table->dropColumn('image_extension');
            });
            Schema::table('sales', function (Blueprint $table) {
                $table->dropColumn('image_extension');
            });
            Schema::table('site_pages', function (Blueprint $table) {
                $table->dropColumn('image_extension');
            });
        } catch (Exception $e) {
            //
        }
    }
};
