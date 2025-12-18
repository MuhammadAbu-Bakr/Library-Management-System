<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('books', function (Blueprint $table) {
            if (Schema::hasColumn('books', 'author')) {
                $table->dropColumn('author');
            }
            if (!Schema::hasColumn('books', 'author_id')) {
                $table->unsignedBigInteger('author_id')->after('title');
                $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            }
            if (!Schema::hasColumn('books', 'category_id')) {
                $table->unsignedBigInteger('category_id')->after('author_id');
                $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            }
        });
    }

    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign(['author_id']);
            $table->dropColumn('author_id');
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
};
