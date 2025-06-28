<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;

class SiswaController extends Controller
{
//     public function index() {
//     $siswa = [
//         ['nama' => 'Andrian', 'kelas' => 'XI RPL 1', 'jk' => 'Laki-Laki', 'alamat' => 'kopo'],
//         ['nama' => 'ridho', 'kelas' => 'XI RPL 1', 'jk' => 'Laki-Laki', 'alamat' => 'cibaduyut'],
//         ['nama' => 'Kiki', 'kelas' => 'XI RPL 1', 'jk' => 'Laki-Laki', 'alamat' => 'sayati'],
//         ['nama' => 'Opik', 'kelas' => 'XI RPL 3', 'jk' => 'Laki-Laki', 'alamat' => 'tci'],
//         ['nama' => 'Malik', 'kelas' => 'XI RPL 2', 'jk' => 'Laki-Laki', 'alamat' => 'tci 1']
//     ];

//     $ortu = [
//         ['namaortu' => 'Andrian', 'jk' => 'Laki-Laki', 'telepon' => '083672937292'],
//         ['namaortu' => 'ridho', 'jk' => 'Laki-Laki', 'telepon' => '08377627277'],
//         ['namaortu' => 'Kiki', 'jk' => 'Laki-Laki', 'telepon' => '08763525549'],
//         ['namaortu' => 'Opik', 'jk' => 'Laki-Laki', 'telepon' => '03802083207'],
//         ['namaortu' => 'Malik', 'jk' => 'Laki-Laki', 'telepon' => '08764664377']
//     ];

//     return view('siswa', compact('siswa', 'ortu'));
// }



//     public function index (){
//         $siswa = [
//         ['nama' => 'Andrian', 'kelas' => 'XI RPL 1', 'jk' => 'Laki-Laki', 'alamat' => 'kopo'],
//         ['nama' => 'ridho', 'kelas' => 'XI RPL 1', 'jk' => 'Laki-Laki', 'alamat' => 'cibaduyut'],
//         ['nama' => 'Kiki', 'kelas' => 'XI RPL 1', 'jk' => 'Laki-Laki', 'alamat' => 'sayati'],
//         ['nama' => 'Opik', 'kelas' => 'XI RPL 3', 'jk' => 'Laki-Laki', 'alamat' => 'tci'],
//         ['nama' => 'Malik', 'kelas' => 'XI RPL 2', 'jk' => 'Laki-Laki', 'alamat' => 'tci 1']
//     ];
//     return view('siswa', compact('siswa'));
//     }
//     public function index1 (){
//         $ortu = [
//         ['namaortu' => 'Andrian', 'jk' => 'Laki-Laki', 'telepon' => '083672937292'],
//         ['namaortu' => 'ridho', 'jk' => 'Laki-Laki', 'telepon' => '08377627277'],
//         ['namaortu' => 'Kiki', 'jk' => 'Laki-Laki', 'telepon' => '08763525549'],
//         ['namaortu' => 'Opik', 'jk' => 'Laki-Laki', 'telepon' => '03802083207'],
//         ['namaortu' => 'Malik', 'jk' => 'Laki-Laki', 'telepon' => '08764664377']
//     ];
//     return view('siswa', compact('ortu'));
//     }

private $siswa = [
    ['id' => 1, 'nama' => 'Ahmad', 'kelas' => 'VII-A'],
    ['id' => 2, 'nama' => 'Ahmad', 'kelas' => 'VII-B'],
];

public function index(){
    if (!Session::has('siswa')){
        Session::put('siswa', $this->siswa);
    }
    $siswa = Session::get('siswa', []);
    return view('siswa.index', compact('siswa'));
}
 public function create(){
    return view('siswa.create');
}

public function store(Request $request){
    $request->validate([
        'nama' => 'required|string|max:225',
        'kelas' => 'required|string|max:12',
    ]);
    $siswa = Session::get('siswa', []);
    $siswa[] = [
        'id' => count($siswa) + 1,
        'nama' => $request -> nama,
        'kelas' => $request -> kelas,
    ];
    Session::put('siswa', $siswa);
    return redirect()->route('siswa.index')->with('berhasil', 'Siswa berhasil ditambahkan');
}

public function edit($id){
    $siswa = Session::get('siswa');
    $siswaItem = collect($siswa)->firstWhere('id', $id);
    if ($siswaItem) {
        return redirect()->route('siswa.index')->with('error', 'Siswa Not Found');
    }
    return view ('siswa.edit', compact('siswaItem'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:225',
        'kelas' => 'required|string|max:10',
    ]);

    $siswa = Session::get('siswa', []);
    $index = collect($siswa)->search(function ($item) use ($id){
        return $item['id'] == $id;
    });

    if ($index === false) {
        return redirect()->route('siswa.index')->with('error', 'Siswa not found');
    }
    $siswa[$index] = [
        'id' => $id,
        'nama' => $request -> nama,
        'kelas' => $request -> kelas,
    ];
    Session::put('siswa', $siswa);

    return redirect()->route('siswa.index')->with('success', 'Siswa update success');
}

public function destroy($id){
    $siswa = Session::get('siswa', []);
    $siswa = array_filter($siswa, function($item) use ($id){
        return $item['id'] != $id;
    });
    Session::put('siswa', array_values($siswa));

    return redirect()->route('siswa.index')->with('success', 'siswa deleted success');
}
}
