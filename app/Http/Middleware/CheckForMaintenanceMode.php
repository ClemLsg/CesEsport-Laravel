<?php

namespace CesEsport\Http\Middleware;
use \Illuminate\Support\Facades;

use Closure;
use Illuminate\Support\Facades\Crypt;

class CheckForMaintenanceMode
{
    /**
     * The application implementation.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected $app;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @return void
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     *
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     */
    public function handle($request, Closure $next)
    {
        if ($this->app->isDownForMaintenance())
        {
            $cookie = $request->cookie('secret-cookie');

            // Laravel cookies are encrypted
            $value = Crypt::decrypt($cookie);

            if($value != '<random string>') {
                return response('Juste une petite maintenance de rien du tout de retour soon !', 503);
            }
        }

        return $next($request);

    }
}
