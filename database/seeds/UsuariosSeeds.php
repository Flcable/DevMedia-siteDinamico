<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuariosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User();
        $usuario->name =  "Flavio Cruz";
        $usuario->email = "flcable@gmail.com";
        $usuario->password = bcrypt("Maio2006");
        $usuario->save();
    }
}
