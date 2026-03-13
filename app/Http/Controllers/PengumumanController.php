<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::latest()->get(); // Mengambil semua pengumuman terbaru

        return inertia('Pengumuman/Index', [ // Mengirim data pengumuman ke view
            'pengumuman' => $pengumuman
        ]);
    }
}
