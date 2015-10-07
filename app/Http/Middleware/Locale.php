<?php namespace App\Http\Middleware;

use Closure;
use Session;
use App;
use Config;
use Lang;
use Redirect;
use Request;

class Locale {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $uri = array_filter(explode('/', Request::server('REQUEST_URI'), 2));

        //dd(Lang::has('basic.lang', $uri[1]));

        if(Lang::has('basic.lang', $uri[1]) == false) {
            $my_locale = Session::get('my.locale', Config::get('app.locale'));

            if(sizeof($uri) == 1) {
                return Redirect::to($my_locale);
            }
            else {
                return Redirect::to($my_locale . '/' . $uri[2]);
            }
        }
        Session::put('my.locale', $uri[1]);
        App::setLocale($uri[1]);

        return $next($request);
    }

}