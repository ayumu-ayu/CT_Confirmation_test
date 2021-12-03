<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::factory()->count(35)->create();
        // $param = [
        //     'fullname' => 'jonjon',
        //     'gendar' => 1,
        //     'email' => 'aai@ii',
        //     'postcode' => '111-1111',
        //     'address' => 'sss',
        //     'building_name' => 'sss',
        //     'opinion' => 'sss'
        // ];
        // DB::table('contacts')->insert($param);
        // $param = [
        //     'fullname' => 'finker',
        //     'gendar' => 2,
        //     'email' => 'aai@ii',
        //     'postcode' => '222-2222',
        //     'address' => 'sss',
        //     'opinion' => 'sss'
        // ];
        // DB::table('contacts')->insert($param);
        // $param = [
        //     'fullname' => 'jonjon',
        //     'gendar' => 1,
        //     'email' => 'tt@dd',
        //     'postcode' => '111-1111',
        //     'address' => 'sss',
        //     'building_name' => 'sss',
        //     'opinion' => 'sss'
        // ];
        // DB::table('contacts')->insert($param);
        // $param = [
        //     'fullname' => 'finker',
        //     'gendar' => 2,
        //     'email' => 'tt@dd',
        //     'postcode' => '222-2222',
        //     'address' => 'sss',
        //     'opinion' => 'sss'
        // ];
        // DB::table('contacts')->insert($param);
        // $param = [
        //     'fullname' => 'jonjon',
        //     'gendar' => 1,
        //     'email' => 'bbb@vvv',
        //     'postcode' => '111-1111',
        //     'address' => 'sss',
        //     'building_name' => 'sss',
        //     'opinion' => 'sss'
        // ];
        // DB::table('contacts')->insert($param);
        // $param = [
        //     'fullname' => 'finker',
        //     'gendar' => 2,
        //     'email' => 'bbb@vvv',
        //     'postcode' => '222-2222',
        //     'address' => 'sss',
        //     'opinion' => 'sss'
        // ];
        // DB::table('contacts')->insert($param);
    }
}

