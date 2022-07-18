<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengenalancontroller extends Controller
{
    //
    public function pengenalan(){
        $nama = "Rafeyfa asyla";
        $umur = "16";
        return view('pages1.pengenalan', compact('nama','umur'));
    }

    public function intro($nama,$alamat,$umur){
        return view('pages1.intro', compact('nama','alamat','umur'));
    }
    
    public function siswa(){
        $a = [
            array('id' => 1, 'nama' =>'Safitri','umur' => 17, 'kelas' => 'XII RPL 1', 'mapel' => ['B.indonesia','B.inggris']),
            array('id' => 2, 'nama' =>'Surya','umur' => 17, 'kelas' => 'XII RPL 3', 'mapel' => ['mtk','ipa']),
            array('id' => 3, 'nama' =>'Rohesa','umur' => 17, 'kelas' => 'XII RPL 3', 'mapel' => ['simdig','B.sunda']),
            array('id' => 4, 'nama' =>'Risnadia','umur' => 16, 'kelas' => 'XII RPL 3', 'mapel' => ['Fisika','kwu']),
            array('id' => 5, 'nama' =>'Siti','umur' => 17, 'kelas' => 'XII RPL 2', 'mapel' => ['pai','al-Quran'])
        ];
        //melihat data dumy basis json
        //dd($a);
        
        //melakukan passing data looping conditional dari controller ke view
        return view('/pages1.siswa',['siswa' => $a]);
    }
}
