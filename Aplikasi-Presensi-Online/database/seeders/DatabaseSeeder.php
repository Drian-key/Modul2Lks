<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attdetail;
use App\Models\User;
use App\Models\Classe;
use App\Models\Attendance;
use App\Models\Subject;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Riski Drian Pratama',
            'class_id' => 1,
            'email' => 'riskidrian1@gmail.com',
            'role' => 'guru',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'Doni Fernando',
            'class_id' => 1,
            'email' => 'doni@gmail.com',
            'role' => 'siswa',
            'password' => bcrypt('12345678')
        ]);

        Attendance::create([
            'teacher_id' => 1,
            'class_id' => 1,
            'subject_id' => 1,
            'topic' => 'Silahkan di isi',
            'date' => '2021-12-21'
        ]);

        Classe::create([
            'name' => 'XII TKJ 1'
        ]);

        Classe::create([
            'name' => 'XII TKJ 2'
        ]);

        Classe::create([
            'name' => 'XII TKJ 3'
        ]);

        Attdetail::create([
            'student_id' => 2,
            'attendance_id' => 1,
            'attstatus' => 'Hadir'
        ]);

        Subject::create([
            'name' => 'Absensi Keberangkatan'
        ]);

        Subject::create([
            'name' => 'Absensi Ekstra'
        ]);

        Subject::create([
            'name' => 'Absensi Ulangan'
        ]);

    }
}
