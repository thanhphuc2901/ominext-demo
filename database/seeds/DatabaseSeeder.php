<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StudentDatabaseSeeder::class);
    }
}
class StudentDatabaseSeeder extends Seeder
{
    public function run() {
        DB::table('students')->insert([
            [
                'student_code' => 'SV001',
                'student_name' => 'Nguyễn Văn A',
                'gender' => '0',
                'grade' => '10',
                'address' => '105 Doãn Kế Thiện, Mai Dịch, Hà Nội',
                'email' => 'anv@ominext.com',
                'GPA' => '3.45'
            ],
            [
                'student_code' => 'SV002',
                'student_name' => 'Trần Thị B',
                'gender' => '1',
                'grade' => '11',
                'address' => '10 Trần Cung, Mai Dịch, Hà Nội',
                'email' => 'btt@ominext.com',
                'GPA' => '2.7'
            ],
            [
                'student_code' => 'SV003',
                'student_name' => 'Phạm Tuấn C',
                'gender' => '0',
                'grade' => '10',
                'address' => '2 Phố Vọng, Hoàng Mai, Hà Nội',
                'email' => 'cpt@ominext.com',
                'GPA' => '4.0'
            ],
            [
                'student_code' => 'SV004',
                'student_name' => 'Phan Thị Ngọc D',
                'gender' => '1',
                'grade' => '12',
                'address' => 'Ngọc Hồi, Đống Đa, Hà Nội',
                'email' => 'dptn@ominext.com',
                'GPA' => '3.2'
            ],
            [
                'student_code' => 'SV005',
                'student_name' => 'Phan Thị E',
                'gender' => '1',
                'grade' => '12',
                'address' => 'Xã Đàn, Đống Đa, Hà Nội',
                'email' => 'ept@ominext.com',
                'GPA' => '2.5'
            ],
            [
                'student_code' => 'SV006',
                'student_name' => 'Bùi Đình G',
                'gender' => '0',
                'grade' => '11',
                'address' => 'Hạ Hồi, Đống Đa, Hà Nội',
                'email' => 'gbđ@ominext.com',
                'GPA' => '2.0'
            ],
            [
                'student_code' => 'SV007',
                'student_name' => 'Lưu Văn H',
                'gender' => '0',
                'grade' => '12',
                'address' => 'Xuân Thủy, Cầu Giấy, Hà Nội',
                'email' => 'hlv@ominext.com',
                'GPA' => '2.1'
            ],
            [
                'student_code' => 'SV008',
                'student_name' => 'Vũ Hà K',
                'gender' => '1',
                'grade' => '10',
                'address' => 'Thanh Xuân, Nguyễn Trãi, Hà Nội',
                'email' => 'kvh@ominext.com',
                'GPA' => '3.9'
            ]
        ]);
    }
}
