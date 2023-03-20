<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Lars Pier De Las Salas',
            'email' => 'larspier.com@gmail.com',
            'password' => Hash::make('AleAndMil212701'),
            'whatsapp'=>'573008504101',
            'telegram'=>'@LarsPier',
            'mobile'=>'573008504101',
            'mobile_2'=>'573013289103',
            'passport'=>'AQ518510',
            'passport_authority'=>'G. ATLANTICO',
            'passport_dateofexpiry'=>'2025-02-02',
            'passport_nationality'=>'colombiana',
            'IDdocument'=>'72201263',
            'profession'=>'Ingeniero Electrónico/Desarrollador de Software',
            'gender'=>'male',
            'birthdate'=>'1974-05-03',
            'marital_status'=>'single',
            'blood_type'=>'O+',
            'country'=>'Colombia',
            'state'=>'Atlántico',
            'city'=>'Barranquilla',
            'postal_code'=>'08006',
            'address'=>'Carrera 14 # 31 - 41',
            'neighborhood'=>'La Unión',
            'coordinator'=>'Laura Lucía Rincón Duarte',
            'emergency_contact_name'=>'Geidy Lucía Hernández Álvarez',
            'emergency_contact_phone'=>'573023993150',
            'emergency_contact_email'=>'hernalvar@gmail.com',
            'photo'=>'user.jpg',
            'bank_name'=>'Bancolombia',
            'bank_account_number'=>'48321812107',
            'type-of-bank-account'=>'saving',
            'pic_security_contact_name'=>'Geidy Lucía Hernández Álvarez',
            'pic_security_contact_phone'=>'573023993150',
            'pic_security_contact_email'=>'hernalvar@gmail.com',
        ]);


        $this->call([
            WorldSeeder ::class,
        ]);
    }
}
