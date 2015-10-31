<?php

use Illuminate\Database\Seeder;
use App\Comentario;

class TablaComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comentarios')->delete();
    
        Comentario::create(array(
            'autor' => 'José Hernandez',
            'texto' => 'Probando los comentarios.'
        ));
    
        Comentario::create(array(
            'autor' => 'Fernando González',
            'texto' => 'Esto Comienza a funcionar.'
        ));
    
       Comentario::create(array(
            'autor' => 'Fernando González',
            'texto' => 'Otro comentario mio :P'
        ));
    }
}
