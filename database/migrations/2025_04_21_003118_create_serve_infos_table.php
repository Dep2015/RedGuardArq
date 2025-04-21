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
        Schema::create('serve_inf', function (Blueprint $table) {

            $table->id();
            $table->string('servidor_id')->index();
            $table->timestamp('timestamp')->nullable();

            // Info general
            $table->string('hostname')->nullable();
            $table->json('ips')->nullable(); // todas las IPs
            $table->string('ip_principal')->nullable();
            $table->string('sistema_operativo')->nullable();
            $table->string('arquitectura')->nullable();
            $table->string('kernel_version')->nullable();
            $table->string('cpu_modelo')->nullable();
            $table->integer('cpu_nucleos_logicos')->nullable();
            $table->integer('cpu_nucleos_fisicos')->nullable();
            $table->decimal('memoria_total_gb', 6, 2)->nullable();
            $table->decimal('disco_total_gb', 6, 2)->nullable();
            $table->bigInteger('uptime_segundos')->nullable();
            $table->string('timezone')->nullable();
            $table->string('mac_address')->nullable();
            $table->boolean('virtualizado')->nullable();

            // Hardware / Infraestructura
            $table->string('chasis')->nullable();     // físico, virtual, blade...
            $table->string('vendor')->nullable();     // Dell, HP, VMware, etc.
            $table->string('modelo')->nullable();     // PowerEdge R730, etc.
            $table->string('locacion')->nullable();   // DC Lima, AWS, etc.

            $table->string('entorno')->nullable();    // producción, staging, etc.

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('serve_inf');
    }
};
