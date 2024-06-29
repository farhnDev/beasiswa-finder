<?php
namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function awal()
    {
        return view('user.awal');
    }

    public function about()
    {
        return view('user.about');
    }

    public function menu()
    {
        $beasiswas = Beasiswa::all();
        return view('user.menu', compact('beasiswas'));
    }

    public function tips()
    {
        return view('user.tips');
    }

    public function detail()
    {
        return view('user.detail');
    }

    public function s1()
    {
        $beasiswas = Beasiswa::where('jenis_pendidikan', 'S1')->get();
        return view('user.s1', compact('beasiswas'));
    }

    public function s2()
    {
        $beasiswas = Beasiswa::where('jenis_pendidikan', 'S2')->get();
        return view('user.s2', compact('beasiswas'));
    }

    public function s3()
    {
        $beasiswas = Beasiswa::where('jenis_pendidikan', 'S3')->get();
        return view('user.s3', compact('beasiswas'));
    }

    public function detail_beasiswa($id)
    {
        $beasiswa = Beasiswa::findOrFail($id);
        return view('user.detail', compact('beasiswa'));
    }

    public function motivasi()
    {
        return view('user.motivasi');
    }

    public function detail_tips()
    {
        return view('user.detail-tips');
    }

    public function detail_motivasi()
    {
        return view('user.detail-motivasi');
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function simpan()
    {
        return view('user.simpan');
    }

    public function add()
    {
        return view('add');
    }

    public function keep()
    {
        // Ambil data beasiswa yang telah ditandai (bookmarked) oleh pengguna
        $beasiswas = Beasiswa::where('bookmark', true)->get();
    
        return view('user.keep', compact('beasiswas'));
    }
    
    public function edit($id)
    {
        $beasiswa = Beasiswa::findOrFail($id);
        return view('edit', compact('beasiswa'));
    }
    public function update(Request $request, $id)
    {
        $beasiswa = Beasiswa::findOrFail($id);
        $beasiswa->update($request->all());
        return redirect()->route('tables');
    }
    public function destroy($id)
    {
        $beasiswa = Beasiswa::findOrFail($id);
        $beasiswa->delete();
        return redirect()->route('tables')->with('success', 'Beasiswa deleted successfully.');
    }

    
}
