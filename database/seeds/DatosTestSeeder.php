<?php


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
        $this->tutores();        
        $this->estudiantes();
        $this->usuarios();
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
        for ($i=1; $i <=5 ; $i++) { 
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
        }
    }

    private function prioridad(){
        for ($i=1; $i <=5 ; $i++) { 
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
        }
    }

    private function categorias()
    {
        for ($i = 1; $i <=6; $i++){
            Categoria::create([
               'categoria' => 'categoria'.$i
            ]);
        }
    }

    private function admin()
    {
        User::create([
            'nombre' => 'Administrador Consultorio Jurídico',
            'identificacion' => '123456',
            'telefono' => '3005577210',
            'rol_id'    => 1,
            'email' => 'admin_cj@cecar.edu.co',
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


}
