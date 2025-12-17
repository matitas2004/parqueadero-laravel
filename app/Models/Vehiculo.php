<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';

    protected $fillable = [
        'placa',
        'tipo',
        'propietario',
        'observaciones'
    ];

    // Obtener todos
    public static function getVehiculos()
    {
        return self::all();
    }

    // Obtener por ID
    public static function getVehiculoById($id)
    {
        return self::find($id);
    }

    // Crear
    public static function createVehiculo(array $data)
    {
        return self::create($data);
    }

    // Actualizar
    public function updateVehiculo(array $data)
    {
        return $this->update($data);
    }

    // Eliminar
    public static function deleteVehiculo(Vehiculo $vehiculo)
    {
        return $vehiculo->delete();
    }
}
