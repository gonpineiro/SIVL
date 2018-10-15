<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // CARGANDO TABLA USERS
        DB::table('users')->insert(['name' => 'Gonzalo','email' => 'gon.pineiro@gmail.com', 'password' => '$2y$10$WGd/zkQkvv2.O7O936GQn.buiJE33cSNAz4TtBWViu6upN6iOEdL6']);
        DB::table('users')->insert(['name' => 'Laden','email' => 'laden@gmail.com', 'password' => '$2y$10$WGd/zkQkvv2.O7O936GQn.buiJE33cSNAz4TtBWViu6upN6iOEdL6']);
        // CARGANDO TABLA AMBIENTES
        DB::table('ambientes')->insert(['identity' => 45244,'user_id' => 1, 'token_blink' => 'KSJD4SD4SM', 'temperatura' =>25,'humedad' =>45,'ip_adress' =>'192.168.1.40','estado_luz' =>1]);
        DB::table('ambientes')->insert(['identity' => 55294,'user_id' => 2, 'token_blink' => 'IWUSJSKWUSK', 'temperatura' =>0,'humedad' =>35,'ip_adress' =>'192.168.1.55','estado_luz' =>0]);
        // CARGANDO TABLA TIPOS
        DB::table('types')->insert(['name' => 'Automatica']);
        DB::table('types')->insert(['name' => 'Fotoperiodica']);
        // CARGANDO TABLA VARIEDADES
        DB::table('variedads')->insert(['name' => 'Sativa']);
        DB::table('variedads')->insert(['name' => 'indica']);
        DB::table('variedads')->insert(['name' => 'Rudelaris']);
        // CARGANDO TABLA MARCAS
        DB::table('marcas')->insert(['name' => 'Monkey Seeds','price_3' => 350,'price_5' => 550]);
        DB::table('marcas')->insert(['name' => 'Sense Seed','price_3' => 330,'price_5' => 500]);
        DB::table('marcas')->insert(['name' => 'Good Seed','price_3' => 420,'price_5' => 620]);
        // CARGANDO TABLA SENSORES
        DB::table('sensors')->insert(['name' => 'SEN-1','valor' => 70,'ambiente_id' => 1]);
        DB::table('sensors')->insert(['name' => 'SEN-2','valor' => 20,'ambiente_id' => 1]);
        DB::table('sensors')->insert(['name' => 'SEN-3','valor' => 60,'ambiente_id' => 1]);
        DB::table('sensors')->insert(['name' => 'SEN-4','valor' => 45,'ambiente_id' => 1]);
        DB::table('sensors')->insert(['name' => 'SEN-5','valor' => 90,'ambiente_id' => 1]);
        DB::table('sensors')->insert(['name' => 'SEN-6','valor' => 5,'ambiente_id' => 1]);
        // CARGANDO TABLA ESPECIES
        DB::table('especies')->insert(['name' => 'OG-Kush','type_id' => 1,'marca_id' => 1,'variedad_id' => 1,'thc' => 20,'cbd' => 15,'cantidad_in' => 65,'cantidad_ex' => 65,'ciclo' => 85]);
        DB::table('especies')->insert(['name' => 'Afgan-Kush','type_id' => 1,'marca_id' => 1,'variedad_id' => 1,'thc' => 15,'cbd' => 30,'cantidad_in' => 65,'cantidad_ex' => 65,'ciclo' => 65]);
        DB::table('especies')->insert(['name' => 'AK-47','type_id' => 1,'marca_id' => 2,'variedad_id' => 2,'thc' => 20,'cbd' => 50,'cantidad_in' => 65,'cantidad_ex' => 65,'ciclo' => 45]);
        DB::table('especies')->insert(['name' => 'Mobidick','type_id' => 1,'marca_id' =>3,'variedad_id' => 2,'thc' => 10,'cbd' => 63,'cantidad_in' => 65,'cantidad_ex' => 65,'ciclo' => 120]);
        DB::table('especies')->insert(['name' => 'Blue Berry','type_id' => 1,'marca_id' =>2,'variedad_id' => 1,'thc' => 25,'cbd' => 21,'cantidad_in' => 65,'cantidad_ex' => 65,'ciclo' => 90]);
        DB::table('especies')->insert(['name' => 'Lemon haze','type_id' => 1,'marca_id' => 3,'variedad_id' => 3,'thc' => 14,'cbd' => 71,'cantidad_in' => 65,'cantidad_ex' => 65,'ciclo' => 70]);
        DB::table('especies')->insert(['name' => 'OG-Kush','type_id' => 1,'marca_id' => 1,'variedad_id' => 1,'thc' => 17,'cbd' => 65,'cantidad_in' => 65,'cantidad_ex' => 65,'ciclo' => 60]);
        DB::table('especies')->insert(['name' => 'OG-Kush','type_id' => 1,'marca_id' => 2,'variedad_id' => 2,'thc' => 33,'cbd' => 45,'cantidad_in' => 65,'cantidad_ex' => 65,'ciclo' => 75]);


        // CARGANDO TABLA PROTOTIPOS
        DB::table('prototypes')->insert(['especie_id' => 3, 'sensor_id' => 4, 'ambiente_id' => 1, 'user_id' => 1,'name' =>'PROTO-01']);
        DB::table('prototypes')->insert(['especie_id' => 1, 'sensor_id' => 5, 'ambiente_id' => 1, 'user_id' => 1,'name' =>'PROTO-02']);
        DB::table('prototypes')->insert(['especie_id' => 5, 'sensor_id' => 6, 'ambiente_id' => 2, 'user_id' => 2,'name' =>'PROTO-03']);
        DB::table('prototypes')->insert(['especie_id' => 4, 'sensor_id' => 3, 'ambiente_id' => 1, 'user_id' => 1,'name' =>'PROTO-04']);
        DB::table('prototypes')->insert(['especie_id' => 2, 'sensor_id' => 2, 'ambiente_id' => 2, 'user_id' => 2,'name' =>'PROTO-05']);
        DB::table('prototypes')->insert(['especie_id' => 6, 'sensor_id' => 1, 'ambiente_id' => 1, 'user_id' => 1,'name' =>'PROTO-06']);


    }
}
