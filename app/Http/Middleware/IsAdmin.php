<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
// use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
   * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
   */
  public function handle(Request $request, Closure $next)
  {
    // &&Auth::user()->admin==1
    if (Auth::user()) {
      return $next($request);
    }
    return redirect('/');
  }
}
