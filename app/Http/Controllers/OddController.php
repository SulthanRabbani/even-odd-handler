<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OddController extends Controller
{
    private function fruits($fruit)
    {
        switch ($fruit) 
        {
            case 1:
                return "Apel";
            case 2:
                return "Mangga";
            case 3:
                return "Pisang";
            case 4:
                return "Nanas";
            case 5:
                return "Jeruk";
            case 6:
                return "Srikaya";
            case 7:
                return "Melon";
            case 8:
                return "Semangka";
            case 9:
                return "Jambu";
            case 10:
                return "Anggur";
            
            
            default:
                return "DILARANG NYARI YANG GAADA";
        }
    }


    // public function get(Request $request, $id)
    // {
    //     $bukuYangDidapat = $this->books($id);
    //     return view('fruits')
    //         ->with('judulBuku', $bukuYangDidapat)
    //         ->with('tahunBuku','Tahun Buku 2021');
    // }
    public function get(Request $request)
    {
        $uri = $request->path();
        $namabuah = $this->fruits($uri);
        return view('fruits')
        ->with('namaBuah',$namabuah);
    }
}