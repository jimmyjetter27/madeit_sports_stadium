<?php

namespace App\Http\Middleware;

use App\Models\Counter;
use Closure;
use Illuminate\Http\Request;

class CounterMiddleware
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
        $ip_address = \Illuminate\Support\Facades\Request::ip();
        $counter = Counter::query()->where('ip_address', $ip_address)->first();
        if ($counter)
        {
           $counter->user_id = auth()->check() ? auth()->user()->id : null;
           $counter->ip_address = $ip_address;
           $counter->visitation_frequency += 1;
           $counter->save();
        } else {
            $new_counter = new Counter();
            $new_counter->user_id = auth()->check() ? auth()->user()->id : null;
            $new_counter->ip_address = $ip_address;
            $new_counter->visitation_frequency = 1;
            $new_counter->save();
        }
        return $next($request);
    }
}
