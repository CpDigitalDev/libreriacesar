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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            
            // Información básica
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            
            // Información adicional del cliente
            $table->string('phone', 20)->nullable();
            $table->string('country', 2)->default('NI'); // Nicaragua por defecto
            $table->string('city')->nullable();
            $table->text('address')->nullable(); // Para envíos
            $table->string('postal_code', 10)->nullable();
            
            // Preferencias de usuario
            $table->enum('role', ['customer', 'admin', 'pastor'])->default('customer');
            $table->boolean('newsletter_subscription')->default(true);
            $table->string('preferred_language', 5)->default('es');
            
            // Información de la iglesia/ministerio (opcional, para pastores)
            $table->string('church_name')->nullable();
            $table->string('ministry_role')->nullable(); // Pastor, Líder, Miembro
            
            // Control y seguridad
            $table->boolean('is_active')->default(true);
            $table->timestamp('last_login_at')->nullable();
            $table->string('last_login_ip', 45)->nullable();
            $table->unsignedInteger('login_attempts')->default(0);
            $table->timestamp('locked_until')->nullable(); // Para bloqueo temporal
            
            // Tokens y recordar
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes(); // Para no borrar usuarios, solo desactivar
            
            // Índices para mejor rendimiento
            $table->index('email');
            $table->index('role');
            $table->index('is_active');
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};