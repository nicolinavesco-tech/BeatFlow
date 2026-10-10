<?php

namespace App\Http\Middleware;

use App\Http\Controllers\HomeController;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $localeLanguage = session('locale', config('app.locale'));

        // Una sessione vecchia può contenere una lingua non più disponibile (es. "uk")
        if (! in_array($localeLanguage, HomeController::LOCALES, true)) {
            $localeLanguage = config('app.locale');
        }

        App::setLocale($localeLanguage);

        return $next($request);
    }
}
