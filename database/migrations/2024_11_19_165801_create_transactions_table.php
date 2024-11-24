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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('plan_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 8, 2);
            $table->boolean('is_sold')->default(false);
            $table->string('sale_number')->nullable;
            $table->timestamps();
        });
    }

    public function storeTransaction(Request $request) { 
        $request->validate([ 
            'user_id' => 'required|exists:users,id', 
            'plan_id' => 'required|exists:plans,id', 
            'amount' => 'required|numeric'
        ]); // Validaciones adicionales si es necesario ]); $transaction = Transaction::create([ 'user_id' => $request->user_id, 'plan_id' => $request->plan_id, 'amount' => $request->amount, 'is_sold' => $request->has('is_sold') ? $request->is_sold : false, 'sale_number' => $request->sale_number, ]); return response()->json(['message' => 'Transacción creada con éxito', 'transaction' => $transaction]);

        $transaction = Transaction::create([ 
            'user_id' => $request->user_id, 
            'plan_id' => $request->plan_id, 
            'amount' => $request->amount, 
            'is_sold' => $request->has('is_sold') ? $request->is_sold : false, 'sale_number' => $request->sale_number, 
        ]); return response()->json(['message' => 'Transacción creada con éxito', 'transaction' => $transaction]);
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
            $table->dropColumn('is_sold');
            $table->dropColumn('sale_number');
    }
};
