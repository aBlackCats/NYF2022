<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Merch;
use App\Models\News;
use App\Models\User;
use App\Models\Timeline;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create(["email"=>"test@email.com"]);

        News::create(["title"=>"LINE-UP PHASE 1", "slug"=>"DAY-1", "body"=>"Kami dengan senang hati memperkenalkan line-up phase utama kita Noah, Dewa19, HIVI!, Tulus, Ardhito Pramono, Juicy Lucy, Raisa dan Andmesh."]);

        News::create(["title"=>"LINE-UP PHASE 2", "slug"=>"DAY-2", "body"=>"Kami dengan senang hati memperkenalkan line-up phase kedua kita Geisha, Lyodra, Nidji, Anji, Fiersa Besari, Afgan, Rizky Febian, dan Sheila On 7 ."]); 

        Timeline::create(['news_id'=>'1', 'title'=>'PHASE-1', 'date'=>'Selasa, 27 Desember 2022', 'time'=>'PKL. 16.00 P.M. - 22.15 P.M.', 'location'=>'Samarinda Convention Hall']);

        Timeline::create(['news_id'=>'2', 'title'=>'PHASE-2', 'date'=>'Rabu, 28 Desember 2022', 'time'=>'PKL. 16.00 P.M. - 22.15 P.M.', 'location'=>'Samarinda Convention Hall']);
    
        Merch::create(['name'=>'T Shirt HNY', 'color'=>'Black & White']);

        Merch::create(['name'=>'T Shirt HNY', 'color'=>'Black & Gold']);

        Merch::create(['name'=>'T Shirt HNY', 'color'=>'White & Black']);

        Merch::create(['name'=>'Tumbler', 'color'=>'HNY - T']);

    }
}
