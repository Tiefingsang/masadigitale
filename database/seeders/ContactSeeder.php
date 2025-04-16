<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            [
                'name' => 'Alice Dupont',
                'email' => 'alice.dupont@example.com',
                'subject' => 'Demande d\'information',
                'message' => 'Bonjour, j\'aimerais avoir plus d\'informations sur vos services.',
                
            ],

            
        ]); 
    }
}
