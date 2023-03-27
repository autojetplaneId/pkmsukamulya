<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesStandardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Nakes
        Role::create(['name'=>'bidan']);
        Role::create(['name'=>'dokter']);
        Role::create(['name'=>'perawat']);
        //jabatan
        Role::create(['name'=>'kapus']);
        Role::create(['name'=>'katu']);
        Role::create(['name'=>'bpp']);
        Role::create(['name'=>'bp']);
        Role::create(['name'=>'kasir']);
        Role::create(['name'=>'pendaftaran']);
        //status asn
        Role::create(['name'=>'asn']);
        Role::create(['name'=>'nonasn']);
        //status pegawai
        Role::create(['name'=>'umum']);
        Role::create(['name'=>'pegawai']);
        //mitra
        Role::create(['name'=>'kader']);
        Role::create(['name'=>'dpm']);
        Role::create(['name'=>'bpm']);
        Role::create(['name'=>'ppm']);
        Role::create(['name'=>'desa']);
        //lever User
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'su']);

    }
}
