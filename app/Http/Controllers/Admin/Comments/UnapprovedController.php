<?php

namespace App\Http\Controllers\Admin\Comments;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnapprovedController extends Controller
{
    public function unapproved()
    {
        return view('pagina.panelAdmin.comments.unapproved');
    }
}
