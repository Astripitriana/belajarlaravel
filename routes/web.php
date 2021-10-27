<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//   return view('welcome');
// });

//Route::get('hal2', function(){
    //return "<h1>Selamat datang di halaman ke dua</h1>";
// });

// Route::get('biodata', function(){
//     $nama = "Astri Pitriana";
//     $jk = "Perempuan";
//     $tmpt_lhr = "Bandung";
//     $tgl_lhr = "10 November 2004";
//     $alamat = "Kp Pasawahan";
//     $agama = "Islam";
//     $Hobi = "Membaca";

//     return "Nama : ". $nama .
//     "<br>Jenis Kelamin : ". $jk . 
//     "<br> Tempat Lahir : " . $tmpt_lhr .
//     "<br> Tanggal Lahir :" . $tgl_lhr . 
//     "<br> Alamat : ". $alamat .
//     "<br> Agama : ". $agama . 
//     "<br> Hobi : ". $Hobi;

//});

//Route::get('biodata2', function(){
  //  $nama = "Astri Pitriana";
  //  $jk = "Perempuan";
  //  $tmpt_lhr = "Bandung";
  //  $tgl_lhr = "10 November 2004";
  //  $alamat = "Kp Pasawahan";
  //  $agama = "Islam";
  //  $Hobi = "Membaca";
  //  return view('biodata', compact('nama', 'jk', 'tmpt_lhr', 'tgl_lhr', 'alamat', 'agama', 'Hobi'));
// });

//route parameter
// Route::get('/input/{nama}/{jk}/{tmpt_lhr}/{tgl_lhr}/{alamat}/{agama}/{hobi}', function($nama, $jk, $tmpt_lhr, $tgl_lhr, $alamat, $agama, $hobi){
//     echo "Nama Saya : ".$nama."<br>";
//     echo "<br>Jenis Kelamin :". $jk ."</br>";
//     echo "<br>Tempat Lahir :". $tmpt_lhr ."</br>";
//     echo "<br>Tanggal Lahir :". $tgl_lhr ."</br>";
//     echo "<br>Alamat :". $alamat ."</br>";
//     echo "<br>Agama :". $agama ."</br>";
//     echo "<br>Hobi :". $hobi ."</br>";
    
// });

Route::get('blog', function(){
    $data = [
        ['id' => 1, 'title' => 'Lorem Ipsum 1', 'content' => 'Content Pertama'],
        ['id' => 2, 'title' => 'Lorem Ipsum 2', 'content' => 'Content Kedua'],
        ['id' => 3, 'title' => 'Lorem Ipsum 3', 'content' => 'Content Ketiga'],
    ];
    //dd ($dtaa);
    return view('blog', compact('data'));
});


