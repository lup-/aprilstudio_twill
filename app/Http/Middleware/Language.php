<?php


namespace App\Http\Middleware;

use \Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class Language
{
    public function handle($request, Closure $next) {
        $allLangs = Config::get('languages');
        $allLocales = array_keys($allLangs);
        $localeSavedInSession = Session::has('applocale');
        $correctLocaleSavedInSession = $localeSavedInSession && array_key_exists(Session::get('applocale'), $allLangs);

        if ($request->route()->hasParameter('lang')) {
            $requestLocale = $request->route()->lang;
        }
        else if ($correctLocaleSavedInSession) {
            $requestLocale = Session::get('applocale');
        }
        else {
            $requestLocale = $request->getPreferredLanguage($allLocales);
        }

        if ($requestLocale) {
            app()->setLocale($requestLocale);
            Session::put('applocale', $requestLocale);
        }

        return $next($request);
    }
}
