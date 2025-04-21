<?php

namespace App\Models\Serve;

use Illuminate\Database\Eloquent\Model;

class ServeInfo extends Model
{
    protected $table = 'serve_inf';

    protected $fillable = [
        'servidor_id',
        'timestamp',
        'hostname',
        'ips',
        'ip_principal',
        'sistema_operativo',
        'arquitectura',
        'kernel_version',
        'cpu_modelo',
        'cpu_nucleos_logicos',
        'cpu_nucleos_fisicos',
        'memoria_total_gb',
        'disco_total_gb',
        'uptime_segundos',
        'timezone',
        'mac_address',
        'virtualizado',
        'chasis',
        'vendor',
        'modelo',
        'locacion',
        'entorno'
    ];

    protected $casts = [
        'ips' => 'array',
        'virtualizado' => 'boolean',
        'timestamp' => 'datetime',
    ];
}
