<?php

namespace App\Http\Controllers\Admin\Comments;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApprovedController extends Controller
{
    public function approved()
    {
        return view('pagina.panelAdmin.comments.approved');
    }
}
