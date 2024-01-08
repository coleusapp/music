<?php

namespace Coleus\Music\Http\Controller;

use Illuminate\Routing\Controller;
use Inertia\Inertia;

class MusicController extends Controller
{
    public function index()
    {
        $songs = [];

        dd(1);

        return Inertia::render('TheHome');
    }
}
