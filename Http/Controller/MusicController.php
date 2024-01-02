<?php

namespace Coleus\Music\Http\Controller;

use Illuminate\Routing\Controller;

class MusicController extends Controller
{
    public function index()
    {
        return view('system::desktop');
    }
}
