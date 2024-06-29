<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Comment;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

ini_set('memory_limit', '1024M');
class BeasiswaController extends Controller
{

    // public function __construct()
    // {
    //     ini_set('memory_limit', '1024M');
    // }

    public function index(Request $request)
    {
        $query = Beasiswa::query();

        if ($request->has('jenis_pendidikan') && $request->jenis_pendidikan != '') {
            $query->where('jenis_pendidikan', $request->jenis_pendidikan);
        }

        $beasiswas = $query->get();
        return view('beasiswa.index', compact('beasiswas'));
    }
    public function tables()
    {
        $beasiswas = Beasiswa::all();
        return view('tables', compact('beasiswas'));
    }

    public function create()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        try {
            Log::info('Store method called');
            Log::info('Request data: ', $request->all());

            $request->validate([
                'title' => 'required',
                'description_short' => 'required',
                'description_long' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'waktu' => 'required|date',
                'tempat' => 'required|string',
                'kuota' => 'required|integer',
                'sasaran' => 'nullable|string',
                'persyaratan' => 'required|string',
                'berkas_pendaftaran' => 'required|string',
                'mekanisme_pendaftaran' => 'required|string',
                'seleksi_berkas' => 'required|string',
                'jadwal_beasiswa' => 'required|string',
                'kontak' => 'required|string',
                'jenis_pendidikan' => 'required|string',
                'bookmark' => 'boolean',
            ]);

            Log::info('Validation passed');

            if ($request->hasFile('image')) {
                Log::info('Image file is present');
                $imagePath = $request->file('image')->store('images/beasiswa', 'public');
                Log::info('Image uploaded to: ' . $imagePath);
                $requestData = $request->except('image');
                $requestData['image'] = $imagePath;
            } else {
                Log::warning('Image file is missing');
                $requestData = $request->all(); // Include this line to ensure all data is included
            }

            Log::info('Request data after processing: ', $requestData);

            Beasiswa::create($requestData);
            Log::info('Beasiswa created successfully');

            return redirect()->route('tables')->with('success', 'Beasiswa created successfully.');
        } catch (\Exception $e) {
            Log::error('Error creating Beasiswa: ' . $e->getMessage());
            return redirect()->route('beasiswa.create')->withErrors('Error creating Beasiswa: ' . $e->getMessage());
        }
    }

    public function show(Beasiswa $beasiswa)
    {
        return view('beasiswa.show', compact('beasiswa'));
    }

    public function edit(Beasiswa $beasiswa)
    {
        return view('edit', compact('beasiswa'));
    }

    public function update(Request $request, Beasiswa $beasiswa)
    {
        $request->validate([
            'title' => 'required',
            'description_short' => 'required',
            'description_long' => 'required',
            'waktu' => 'required|date',
            'tempat' => 'required',
            'kuota' => 'required|integer',
            'kontak' => 'required|string',
            'jenis_pendidikan' => 'required',
        ]);

        $beasiswa->update($request->all());
        return redirect()->route('beasiswa.index')->with('success', 'Beasiswa updated successfully.');
    }

    public function destroy(Beasiswa $beasiswa)
    {
        $beasiswa->delete();
        return redirect()->route('tables')->with('success', 'Beasiswa deleted successfully.');
    }

    // BeasiswaController.php

    public function storeRating(Request $request, Beasiswa $beasiswa)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Cari rating berdasarkan user_id dan beasiswa_id
        $rating = Rating::where('user_id', auth()->id())
            ->where('beasiswa_id', $beasiswa->id)
            ->first();

        if ($rating) {
            // Jika rating sudah ada, update rating
            $rating->rating = $request->rating;
            $rating->save();
        } else {
            // Jika rating belum ada, buat rating baru
            $rating = new Rating();
            $rating->user_id = auth()->id();
            $rating->beasiswa_id = $beasiswa->id;
            $rating->rating = $request->rating;
            $rating->save();
        }

        return redirect()->route('detail', $beasiswa)->with('success', 'Rating has been added successfully.');
    }


    public function storeComment(Request $request, Beasiswa $beasiswa)
    {
        $request->validate([
            'comment' => 'required|string',
        ]);

        $comment = new Comment();
        $comment->user_id = auth()->id();
        $comment->beasiswa_id = $beasiswa->id;
        $comment->comment = $request->comment;
        $comment->save();

        return redirect()->route('detail', $beasiswa)->with('success', 'Comment has been added successfully.');
    }

    // public function rate(Request $request, Beasiswa $beasiswa)
    // {
    //     try {
    //         // Validasi input rating
    //         $request->validate([
    //             'rating' => 'required|integer|min:1|max:5',
    //         ]);

    //         // Ambil user ID yang sedang login
    //         $user_id = auth()->id();

    //         // Cari atau buat entri rating sesuai user dan beasiswa
    //         $rating = Rating::updateOrCreate(
    //             ['user_id' => $user_id, 'beasiswa_id' => $beasiswa->id],
    //             ['rating' => $request->rating]
    //         );

    //         // Redirect kembali ke halaman sebelumnya
    //         return redirect()->back()->with('success', 'Rating has been updated successfully.');
    //     } catch (\Exception $e) {
    //         // Tangani jika terjadi error
    //         return redirect()->back()->withErrors('Error: ' . $e->getMessage());
    //     }
    // }
    public function saveBookmark(Beasiswa $beasiswa)
    {
        try {
            // Toggle nilai bookmark untuk beasiswa tertentu
            $beasiswa->update(['bookmark' => !$beasiswa->bookmark]);

            $message = $beasiswa->bookmark ? 'Beasiswa saved successfully.' : 'Beasiswa removed from saved.';

            return redirect()->back()->with('success', $message);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Error: ' . $e->getMessage());
        }
    }


    // Menghapus bookmark beasiswa oleh pengguna
    public function removeBookmark(Beasiswa $beasiswa)
    {
        try {
            $beasiswa->update(['bookmark' => false]);
            return redirect()->back()->with('success', 'Bookmark removed.');
        } catch (\Exception $e) {
            Log::error('Error removing bookmark: ' . $e->getMessage());
            return redirect()->back()->withErrors('Error removing bookmark.');
        }
    }

    // BeasiswaController.php

    public function search(Request $request)
    {
        $query = $request->input('query');
        $beasiswas = Beasiswa::where('title', 'LIKE', "%$query%")
            ->orWhere('jenis_pendidikan', 'LIKE', "%$query%")
            ->get();

        return view('partials.search_results', compact('beasiswas', 'query'));
    }
}
