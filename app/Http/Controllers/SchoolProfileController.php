<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolProfile;

class SchoolProfileController extends Controller
{
    public function index(){

        $dataSaya = [
            'nama' => 'asep',
            'kelas' => 'kelas king',
            'alamat' => 'ciroyom',
            'hobi' => 'ngising'
        ];

        $dataProfile = SchoolProfile::find(1);

        return view('landingpage', compact(['dataProfile', 'dataSaya']));
    }

     public function index2(){

        $dataArticle = [
            'title' => 'besi yang dijanjikan 3000 tahun yang lalu',
            'kelas' => 'kisah orang orang medan yang suka maling besi punya orang',
            'alamat' => 'dewasa'

        ];

        $dataProfile = SchoolProfile::find(1);

        return view('landingpage2', compact(['dataProfile', 'dataArticle']));
    }
}
