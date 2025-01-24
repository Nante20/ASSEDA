<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('email'); // Email du donateur
            $table->decimal('amount', 8, 2); // Montant du don
            $table->string('payment_intent_id')->nullable(); // ID du PaymentIntent de Stripe
            $table->string('status')->default('pending'); // Statut du don ('pending', 'succeeded', 'failed')
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donations');
    }
}

