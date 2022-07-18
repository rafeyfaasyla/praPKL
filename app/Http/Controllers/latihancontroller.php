<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class latihancontroller extends Controller
{
    //
    public function menu(){
        $a = [
            array('beranda' => 'Beranda', 
            'berita' =>'Berita',
            'Berita' => ['Politik','Manca Negara'],
            'Olahraga' => 'Olahraga',
            'olahraga' => ['Sepak bola','Bulu tangkis'], 
            'tentang' => 'Tentang')

        ];
           
        //melihat data dumy basis json
        //dd($a);
        
        //melakukan passing data looping conditional dari controller ke view
        return view('/pages2.menu',['menu' => $a]);
    }
    public function dosen(){

        $b = [
            ['id' => 1,  'dosen' =>'Yusuf Bachtiar', 'matkul' => 'pemrograman mobile',
             'mahasiswa' => [
                ['mahasiswa' => 'Muhammad sholeh', 'nilai' => 78],
                [ 'mahasiswa' => 'Jujun junaedi', 'nilai' => 85],
                [ 'mahasiswa' => 'Mamat alkatiri', 'nilai' => 90],
                [ 'mahasiswa' => 'Ubay holin', 'nilai' => 87],
                [ 'mahasiswa' => 'Fadillah', 'nilai' => 95],
              ]
            ],

            ['id' => 2,  'dosen' =>'Yaris Riyadi', 'matkul' => 'pemrograman web',
            'mahasiswa' => [
               ['mahasiswa' => 'Alfred McTomminay', 'nilai' => 67],
               [ 'mahasiswa' => 'Bruno Kasmir', 'nilai' => 90],
               [ 'mahasiswa' => 'Akid Hendra', 'nilai' => 50],
               [ 'mahasiswa' => 'Dany Irawan', 'nilai' => 70],
               [ 'mahasiswa' => 'Candra Mega Putra', 'nilai' => 60],
           
             ]
           ],

        ];
        //melihat data dumy basis json
        //dd($a);
        
        //melakukan passing data looping conditional dari controller ke view
        return view('/pages2.dosen',['dosen' => $b]);
    }

    public function stasiun(){
        $c = [
            ['nama' => 'Net tv', 'acara' => 'komedi', 'jam' => '17.00' , 'tanggal' => '17 agustus'],
            ['nama' => 'TVRI', 'acara' => 'Laptop si unyil', 'jam' => '09.00' , 'tanggal' => '10 november'],
            ['nama' => 'Ochannel', 'acara' => 'ini bukan talkshow', 'jam' => '13.00' , 'tanggal' => '15 juli'],
            ['nama' => 'BEINSPORT', 'acara' => 'sepak bola', 'jam' => '18.00' , 'tanggal' => '15 maret'],
            ['nama' => 'Indosiar', 'acara' => 'panggilan', 'jam' => '19.00' , 'tanggal' => '20 agustus']
        ];
        //melihat data dumy basis json
        //dd($a);
        
        //melakukan passing data looping conditional dari controller ke view
        return view('/pages2.stasiun',['stasiun' => $c]);
    }

    public function belanja(){
        $d = [
            ['nama' => 'alfian', 'membeli' =>[
             ['beli' => 'sepatu','harga' => '250000'],
             ['beli' => 'baju','harga' => '100000'],
             ['beli' => 'celana','harga' => '150000'],
             ['beli' => 'kupluk','harga' => '100000']
            ],
            ],

            ['nama' => 'dida', 'membeli' =>[
            ['beli' => 'topi','harga' => '100000'],
            ['beli' => 'baju','harga' => '750000'],
            ['beli' => 'celana','harga' => '125000'],
            ]
           ]
        ];
        return view('/pages2.belanja', ['belanja' => $d]);
    }
  
}
