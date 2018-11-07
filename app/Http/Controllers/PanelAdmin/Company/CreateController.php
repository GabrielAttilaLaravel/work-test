<?php

namespace App\Http\Controllers\PanelAdmin\Company;

use App\Http\Controllers\Controller;
use App\Models\FileUpload;
use App\Models\Pais;

class CreateController extends Controller
{
    public function create()
    {
        $data = FileUpload::join('paises', 'paises.id', 'file_uploads.file_id')
            ->join('pais_prefix_phone', 'pais_prefix_phone.pais_id', 'paises.id')
            ->join('prefixes_phones', 'prefixes_phones.id', 'pais_prefix_phone.prefix_phone_id')
            ->where('file_uploads.file_type', Pais::class)
            ->select('file_uploads.nameF', 'file_uploads.id',
                    'paises.name_short', 'paises.nameP',
                    'prefixes_phones.prefix'
            )
            ->get();

        /*$data = [
            'img' => "img/user.jpg",
            'phone' => "+584125357552",
            'pais' => 've',
        ];*/

        return view('pagina.panelAdmin.company.create', compact('data'));
    }
}
