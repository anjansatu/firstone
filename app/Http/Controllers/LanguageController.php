<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Switch the application language.
     */
    public function switch(string $locale, Request $request): RedirectResponse
    {
        if (! in_array($locale, ['en', 'bn'])) {
            abort(400);
        }

        $request->session()->put('locale', $locale);
        app()->setLocale($locale);

        return redirect()->back();
    }
}
