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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title_products'); // product-title;
            $table->text('description_products')->nullable(); // product-description
            $table->enum('category', ['men', 'femme', 'electronique', 'kids', 'loisirs']); // product-category
            $table->enum('condition', ['new', 'like_new', 'good', 'fair']); /// product-condition
            $table->enum('type', ['Vêtements', 'Chaussures', 'Accessoires', 'Sport', 'Casquette', 'Casques Audio', 'Montres Connectées', 'Smartphones', 'Réfrigérateurs', 'Gaming', 'Gaming', 'Accessoires PC', 'Romans', 'BD & Mangas', 'Jeux de société', 'Livres jeunesse', 'Puzzles', 'Cadeaux créatifs', 'Autre']); /// product-condition
            // Section Prix
            $table->decimal('price', 10, 2); // product-price
            $table->decimal('discount', 5, 2)->nullable(); // product-discount
            $table->decimal('final_price', 10, 2); // Calculé
            // Section Tailles
            $table->json('sizes')->nullable(); // sizes[] (XS, S, M, L, XL, XXL)
            // Section Localisation
            $table->string('city'); // product-city
            $table->string('district')->nullable(); // product-district

            $table->timestamps();

            // Index
            $table->index(['category', 'condition']);
        });

        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->string('path'); // images[] (fichiers uploadés)
            $table->boolean('is_main')->default(false); // À définir via set-main-image
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_images');
        Schema::dropIfExists('products');
    }
};
