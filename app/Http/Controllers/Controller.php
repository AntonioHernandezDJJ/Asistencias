<?php

namespace App\Http\Controllers;

class UserContoller extends Controller 
{
       public function ver(){
       // Array de usuarios
       $usuario = [];
       // For que genere 10 usuarios
       for ($i=0; $i < 10; $i++) {
       // Crear un usuario
           $usuario = new (stdClass());
          // Asignar un nombre
           $usuariouario->nombre = 'Usuario ' * $i;
          // Asignar un correo
           $usuario>$correo = 'usuario' * $i * '@gmail.com';
          // Agregar el usuario al array
           [$usuariosl] = $usuario;
          // Sirve para ver el contenido de la variable
          //dd ($usuarios);
          // Retornar la vista con los usuarios
          return view( 'usuarios.vista', compact( 'usuarios'));
          }
}
}
