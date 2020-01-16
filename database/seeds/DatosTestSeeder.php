<?php


use Consultorio\Models\Accion;
use Illuminate\Database\Seeder;
use Consultorio\Models\Categoria;
use Consultorio\Models\Prioridad;
use Consultorio\Models\Estado;
use Consultorio\Models\User;
use Consultorio\Models\Rol;

class DatosTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->roles();
        $this->estados();
        $this->prioridad();
        $this->categorias();
        $this->admin();
        $this->sistema();
        $this->tutores();
        $this->estudiantes();
        $this->usuarios();
        $this->acciones();
    }

    private function roles(){
        for ($i=1; $i <=4 ; $i++) { 
            if ($i == 1){
                Rol::create([
                    'rol' => 'admin'
                ]);
            }

            if ($i == 2){
                Rol::create([
                    'rol' => 'tutor'
                ]);
            }

            if ($i == 3){
                Rol::create([
                    'rol' => 'estudiante'
                ]);
            }

            if ($i == 4){
                Rol::create([
                    'rol' => 'usuario'
                ]);
            }
        }
    }

    private function estados(){
        for ($i=1; $i <=7 ; $i++) {
            if($i==1){
                Estado::create([
                    'estado' => 'nueva'
                ]);
            }

            if($i==2){
                Estado::create([
                    'estado' => 'asignada'
                ]);
            }

            if($i==3){
                Estado::create([
                    'estado' => 'en proceso'
                ]);
            }

            if($i==4){
                Estado::create([
                    'estado' => 'en revisión'
                ]);
            }

            if($i==5){
                Estado::create([
                    'estado' => 'resuelta'
                ]);
            }

            if($i==6){
                Estado::create([
                    'estado' => 'esperando datos'
                ]);
            }

            if($i==7){
                Estado::create([
                    'estado' => 'no admitida'
                ]);
            }
        }
    }

    private function prioridad(){
        for ($i=1; $i <=6 ; $i++) {
            if($i==1){
                Prioridad::create([
                    'prioridad' => 'baja',
                    'tiempo'    => '6'
                ]);
            }

            if($i==2){
                Prioridad::create([
                    'prioridad' => 'normal',
                    'tiempo'    => '4'
                ]);
            }

            if($i==3){
                Prioridad::create([
                    'prioridad' => 'alta',
                    'tiempo'    => '3'
                ]);
            }

            if($i==4){
                Prioridad::create([
                    'prioridad' => 'urgente',
                    'tiempo'    => '2'
                ]);
            }

            if($i==5){
                Prioridad::create([
                    'prioridad' => 'inmediata',
                    'tiempo'    => '1'
                ]);
            }

            if($i==5){
                Prioridad::create([
                    'prioridad' => 'sin prioridad',
                    'tiempo'    => '99'
                ]);
            }
        }
    }

    private function categorias()
    {
        for ($i = 1; $i <=8; $i++){
            if ($i == 1) {
                Categoria::create([
                    'categoria' => 'Sin categoría'
                ]);
            }
            if ($i == 2) {
                Categoria::create([
                    'categoria' => 'Derecho civil'
                ]);
            }
            if ($i == 3) {
                Categoria::create([
                    'categoria' => 'Derecho laboral'
                ]);
            }
            if ($i == 4) {
                Categoria::create([
                    'categoria' => 'Derecho público'
                ]);
            }
            if ($i == 5) {
                Categoria::create([
                    'categoria' => 'Derecho penal'
                ]);
            }
            if ($i == 6) {
                Categoria::create([
                    'categoria' => 'Derecho de familia'
                ]);
            }
            if ($i == 7) {
                Categoria::create([
                    'categoria' => 'Conciliación'
                ]);
            }
            if ($i == 8) {
                Categoria::create([
                    'categoria' => 'Consumo'
                ]);
            }
        }
    }

    private function admin()
    {
        User::create([
            'nombre' => 'Consultorio Jurídico',
            'identificacion' => '123456',
            'telefono' => '3005577210',
            'rol_id'    => 1,
            'email' => 'admin_cj@cecar.edu.co',
            'activo' => true,
            'password' => bcrypt('Cecar!"#')
        ]);
            
    }

    private function sistema()
    {
        User::create([
            'nombre' => 'Sistema virtual',
            'identificacion' => '000000',
            'telefono' => '0000000000',
            'rol_id'    => 1,
            'email' => 'sistemavirtual@cecar.edu.co',
            'activo' => true,
            'password' => bcrypt('Cecar!"#')
        ]);

    }

    private function tutores(){
        for ($i=1; $i <=3 ; $i++) {
            User::create([
                'nombre' => 'Nombre tutor '.$i,
                'identificacion' => '123456'.$i,
                'telefono' => '300557721'.$i,
                'rol_id'    => 2,
                'email' => 'tutor'.$i.'@cecar.edu.co',
                'activo' => true,
                'password' => bcrypt('Cecar1')
            ]);
        }
    }

    private function estudiantes(){
        for ($i=1; $i <=7 ; $i++) {
            User::create([
                'nombre' => 'Nombre estudiante '.$i,
                'identificacion' => '54321'.$i,
                'telefono' => '318213425'.$i,
                'rol_id'    => 3,
                'email' => 'estudiante'.$i.'@cecar.edu.co',
                'activo' => true,
                'password' => bcrypt('Cecar123')
            ]);
        }
    }

    private function usuarios(){
        for ($i=1; $i <=5 ; $i++) {
            User::create([
                'nombre' => 'Nombre usuario '.$i,
                'identificacion' => '987654'.$i,
                'telefono' => '318213428'.$i,
                'rol_id'    => 4,
                'email' => 'usuario'.$i.'@cecar.edu.co',
                'activo' => true,
                'password' => bcrypt('123456')
            ]);
        }
    }

    private function acciones(){
        for ($i=1; $i <= 16; $i++){
            if ($i == 1){
                Accion::create([
                    'accion' => 'Creación',
                    'notificable' => true
                ]);
            }
            if ($i == 2){
                Accion::create([
                    'accion' => 'Estado'
                ]);
            }
            if ($i == 3){
                Accion::create([
                    'accion' => 'Categoria'
                ]);
            }
            if ($i == 4){
                Accion::create([
                    'accion' => 'Prioridad'
                ]);
            }
            if ($i == 5){
                Accion::create([
                    'accion' => 'Responsable'
                ]);
            }
            if ($i == 6){
                Accion::create([
                    'accion' => 'Revisor'
                ]);
            }
            if ($i == 7){
                Accion::create([
                    'accion' => 'Creación de nota'
                ]);
            }
            if ($i == 8){
                Accion::create([
                    'accion' => 'Edición de nota'
                ]);
            }
            if ($i == 9){
                Accion::create([
                    'accion' => 'Eliminación de nota'
                ]);
            }
            if ($i == 10){
                Accion::create([
                    'accion' => 'Modificación de estado'
                ]);
            }
            if ($i == 11){
                Accion::create([
                    'accion' => 'Modificación de categoría'
                ]);
            }
            if ($i == 12){
                Accion::create([
                    'accion' => 'Modificación de prioridad',
                    'notificable' => true
                ]);
            }
            if ($i == 13){
                Accion::create([
                    'accion' => 'Modificación de responsable',
                    'notificable' => true
                ]);
            }
            if ($i == 14){
                Accion::create([
                    'accion' => 'Modificación de revisor',
                    'notificable' => true
                ]);
            }
            if ($i == 15){
                Accion::create([
                    'accion' => 'Transferencia de solicitud',
                    'notificable' => true
                ]);
            }
            if ($i == 16){
                Accion::create([
                    'accion' => 'Autorización para cerrar caso',
                    'notificable' => true
                ]);
            }
        }
    }


}
