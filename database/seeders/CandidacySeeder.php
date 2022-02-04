<?php

namespace Database\Seeders;

use App\Models\Candidacy;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Manual for test unit
        $application = new Candidacy([
            'user_id' => \App\Models\User::orderByRaw('RAND()')->first()->id,
            'offer_id' => \App\Models\Offer::find(1)->id,
            'status' => mt_rand(0,2)
        ]);
        $application->save();

        for($i=0; $i<6; $i++) {
            $application = new Candidacy([
                'user_id' => \App\Models\User::orderByRaw('RAND()')->first()->id,
                'offer_id' => \App\Models\Offer::orderByRaw('RAND()')->first()->id,
                'status' => mt_rand(0,2)
            ]);
            $application->save();
        }

    }
}
