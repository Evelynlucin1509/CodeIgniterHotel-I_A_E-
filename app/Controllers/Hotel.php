<?php

namespace App\Controllers;
use App\Models\HotelModel;

class Hotel extends BaseController
{
    public function index()
    {
        $session = session();
        $model = new HotelModel();
        $data['hotel'] = $model->findAll();
        $data['message'] = $session->getFlashdata('message');
        return view('hotel/index', $data);
    }

    public function insertar($nombre, $categoria)
    {
        $model = new HotelModel();
        $data = [
            'nombre' => $nombre,
            'categoria' => $categoria,
        ];
        $model->insert($data);
        session()->setFlashdata('message', 'Hotel insertado exitosamente.');
        return redirect()->to('/hotel');
    }

    public function eliminar($id)
    {
        $model = new HotelModel();
        $model->delete($id);
        session()->setFlashdata('message', 'Hotel eliminado exitosamente.');
        return redirect()->to('/hotel');
    }

    public function actualizar($id, $nombre, $categoria)
    {
        $model = new HotelModel();
        $data = [
            'nombre' => $nombre,
            'categoria' => $categoria,
        ];
        $model->update($id, $data);
        session()->setFlashdata('message', 'Hotel actualizado exitosamente.');
        return redirect()->to('/hotel');
    }
}