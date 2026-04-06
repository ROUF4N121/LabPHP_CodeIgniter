<?php

namespace App\Cells;

use App\Models\ArtikelModel;

class ArtikelTerkini
{
    public function index($kategori = null)
    {
        $model = new ArtikelModel();

        if ($kategori) {
            $model->where('kategori', $kategori);
        }

        $artikel = $model->orderBy('created_at', 'DESC')
                         ->limit(5)
                         ->findAll();

        return view('components/artikel_terkini', [
            'artikel' => $artikel
        ]);
    }
}