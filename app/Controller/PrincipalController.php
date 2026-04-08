<?php
App::uses('AppController', 'Controller');

class PrincipalController extends AppController
{

    public $uses = array('Registro');

    public function index()
    {
        $this->layout = 'principal';
        $this->set('title_for_layout', 'Página Consolas');
        $this->set('header_params', array('titleModule' => 'pagina principal'));

        $datos = $this->Registro->find('all');
        $this->set('registros', $datos);
    }

    public function listar()
    {
        $this->layout = 'admin';
        $this->set('title_for_layout', 'Lista de Usuarios');
        $this->set('header_params', array('titleModule' => 'Lista de Usuarios'));

        $datos = $this->Registro->find('all');
        $this->set('registros', $datos);
    }

    public function agregar()
    {
        $this->layout = 'admin';
        $this->set('title_for_layout', 'Agregar Usuario');
        $this->set('header_params', array('titleModule' => 'Agregar Usuario'));
    }

    /**
     * Procesa el formulario de registro cuando llega por AJAX
     */
    public function agregarInfo()
    {
        $this->autoRender = false;

        $datos = array(
            'Registro' => array(
                'cedula' => $_POST['data']['Registro']['cedula'],
                'nombre' => $_POST['data']['Registro']['nombre'],
                'apellido' => $_POST['data']['Registro']['apellido'],
                'numero_tlf' => $_POST['data']['Registro']['numero_tlf'],
                'email' => $_POST['data']['Registro']['email']
            )
        );

        if ($this->Registro->save($datos)) {
            echo 'SUCCESS';
        } else {
            echo 'ERROR';
        }
    }
    public function eliminar($id = null)
    {
        $this->autoRender = false;

        if (!$id) {
            echo 'ERROR';
            return;
        }

        if ($this->Registro->delete($id)) {
            echo 'SUCCESS';
        } else {
            echo 'ERROR';
        }
    }
    /**
     * Actualiza los datos del usuario cuando viene por AJAX
     */
    public function editarInfo()
    {
        $this->autoRender = false;

        if ($this->request->is('post')) {
            $id = $_POST['id'];
            $datos = array(
                'Registro' => array(
                    'cedula' => $_POST['cedula'],
                    'nombre' => $_POST['nombre'],
                    'apellido' => $_POST['apellido'],
                    'numero_tlf' => $_POST['numero_tlf'],
                    'email' => $_POST['email']
                )
            );

            $this->Registro->id = $id;
            if ($this->Registro->save($datos)) {
                echo 'SUCCESS';
            } else {
                echo 'ERROR';
            }
        }
    }
}
