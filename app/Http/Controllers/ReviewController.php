<?php

namespace App\Http\Controllers;

use App\Models\ReviewEvent;
use App\Models\ReviewKuliner;
use App\Models\ReviewPenginapan;
use App\Models\ReviewWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ReviewController extends Controller
{
    public function submitReviewWisata(Request $request)
    {
        $data = [
            'user_id' => Auth::user()->id,
            'wisata' => intval($request->id),
            'rating_bintang' => intval($request->input('hiddenRate')),
            'komentar' => $request->input('komentar') ? $request->input('komentar') : '',
        ];

        if ($request->hasFile('gambar_review')) {
            $manager = new ImageManager(new Driver());
            $imageName = uniqid('', true) . '_' . time() . '.webp';
            $image = $manager->read($request->gambar_review)->toWebp(90);
            $image->save(base_path('public/images/wisata/' . $imageName));
            $data['gambar'] = $imageName;
        }

        ReviewWisata::create($data);
        toast('Ulasan Anda telah ditambahkan!', 'success');
        return redirect()->back();
    }

    public function submitReviewKuliner(Request $request)
    {
        $data = [
            'user_id' => Auth::user()->id,
            'kuliner' => intval($request->id),
            'rating_bintang' => intval($request->input('hiddenRate')),
            'komentar' => $request->input('komentar') ? $request->input('komentar') : '',
        ];

        if ($request->hasFile('gambar_review')) {
            $manager = new ImageManager(new Driver());
            $imageName = uniqid('', true) . '_' . time() . '.webp';
            $image = $manager->read($request->gambar_review)->toWebp(90);
            $image->save(base_path('public/images/kuliner/' . $imageName));
            $data['gambar'] = $imageName;
        }

        ReviewKuliner::create($data);
        toast('Ulasan Anda telah ditambahkan!', 'success');
        return redirect()->back();
    }

    public function submitReviewPenginapan(Request $request)
    {
        $data = [
            'user_id' => Auth::user()->id,
            'kuliner' => intval($request->id),
            'rating_bintang' => intval($request->input('hiddenRate')),
            'komentar' => $request->input('komentar') ? $request->input('komentar') : '',
        ];

        if ($request->hasFile('gambar_review')) {
            $manager = new ImageManager(new Driver());
            $imageName = uniqid('', true) . '_' . time() . '.webp';
            $image = $manager->read($request->gambar_review)->toWebp(90);
            $image->save(base_path('public/images/kuliner/' . $imageName));
            $data['gambar'] = $imageName;
        }

        ReviewPenginapan::create($data);
        toast('Ulasan Anda telah ditambahkan!', 'success');
        return redirect()->back();
    }

    public function submitReviewEvent(Request $request)
    {
        $data = [
            'user_id' => Auth::user()->id,
            'event' => intval($request->id),
            'rating_bintang' => intval($request->input('hiddenRate')),
            'komentar' => $request->input('komentar') ? $request->input('komentar') : '',
        ];

        if ($request->hasFile('gambar_review')) {
            $manager = new ImageManager(new Driver());
            $imageName = uniqid('', true) . '_' . time() . '.webp';
            $image = $manager->read($request->gambar_review)->toWebp(90);
            $image->save(base_path('public/images/event/' . $imageName));
            $data['gambar'] = $imageName;
        }

        ReviewEvent::create($data);
        toast('Ulasan Anda telah ditambahkan!', 'success');
        return redirect()->back();
    }
}