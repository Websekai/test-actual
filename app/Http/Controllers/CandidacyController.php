<?php

namespace App\Http\Controllers;

use App\Models\Candidacy;
use App\Models\Offer;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CandidacyController extends Controller
{
    public function index() {
        return Offer::with(['candidacies'])->get();
    }

    public function show(Offer $offer) {
        return Offer::with(['candidacies'])->find($offer->id);
    }
}
