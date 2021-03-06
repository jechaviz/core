<?php

namespace LaravelEnso\Core\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Core\Http\Responses\GuestState;

class Guest extends Controller
{
    public function __invoke()
    {
        return new GuestState();
    }
}
