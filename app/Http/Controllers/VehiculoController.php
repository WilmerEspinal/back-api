<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehiculoController extends Controller
{
    //funcion para mostrar todos los vehiculos verbo: GET
    public function listaVehiculos()
    {
        $vehiculos = Vehiculo::all();
        return $vehiculos;
    }

    //función para agregar un nuevo vehiculo verbo: POST
    public function agregarVehiculo(Request $request)
    {
        Vehiculo::create([
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'anio' => $request->anio,
            'precio' => $request->precio,
            'color' => $request->color,
            'numero_puertas' => $request->numero_puertas,
            'capacidad_pasajero' => $request->capacidad_pasajero,
            'garantia' => $request->garantia,
        ]);
    }

    //función para editar datos de un vehiculo verbo: PUT
    public function editarVehiculo(Request $request, $id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->marca = $request->marca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->anio = $request->anio;
        $vehiculo->precio = $request->precio;
        $vehiculo->color = $request->color;
        $vehiculo->numero_puertas = $request->numero_puertas;
        $vehiculo->capacidad_pasajero = $request->capacidad_pasajero;
        $vehiculo->garantia = $request->garantia;
        $vehiculo->save();
    }

    //función para elminar un vehiculo verbo: DELETE
    public function eliminarVehiculo($id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->delete();
    }
}
