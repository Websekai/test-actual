<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $offer = new Offer([
            'title' => 'Recrute dev javascript 1',
            'description' => 'Bla blb bla
            ligne 2 lign 2 bis
            ligne 3',
            'company' => 'Société1',
            'contract_type' =>'CDI',
            'remote' => true,
            'remuneration' => '40000 - 50000',
            'city' => 'Paris',
            'country' => 'France'
        ]);
        $offer->save();
        $offer = new Offer([
            'title' => 'Recrute dev javascript 2',
            'description' => 'Bla blb bla
            ligne 2 lign 2 bis
            ligne 3',
            'company' => 'Société 2',
            'contract_type' =>'CDD',
            'remote' => false,
            'remuneration' => '40000',
            'city' => 'Marseille',
            'country' => 'France'
        ]);
        $offer->save();

        $offer = new Offer([
            'title' => 'Recrute devops 1',
            'description' => 'Bla blb bla
            ligne 2 lign 2 bis
            ligne 3',
            'company' => 'Société 3',
            'contract_type' =>'Freelance',
            'remote' => true,
            'remuneration' => '600€/J',
            'city' => 'Paris',
            'country' => 'France'
        ]);
        $offer->save();

        $offer = new Offer([
            'title' => 'Recrute dev php 1',
            'description' => 'Bla blb bla
            ligne 2 lign 2 bis
            ligne 3',
            'company' => 'Société 1',
            'contract_type' =>'CDI',
            'remote' => true,
            'remuneration' => '50000',
            'city' => 'Nice',
            'country' => 'France'
        ]);
        $offer->save();

        $offer = new Offer([
            'title' => 'Recrute dev php 2',
            'description' => 'Bla blb bla
            ligne 2 lign 2 bis
            ligne 3',
            'company' => 'Société2',
            'contract_type' =>'CDI',
            'remote' => true,
            'remuneration' => '80000',
            'city' => 'Paris',
            'country' => 'France'
        ]);
        $offer->save();
    }
}
