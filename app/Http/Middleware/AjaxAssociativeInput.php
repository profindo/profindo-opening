<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AjaxAssociativeInput
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
        foreach($request->input() as $key => $value) {
            if(preg_match('{(\w+)\[(\w+)\]}', $key, $matches)) {
                if($request->input($key)) {
                    $request->merge([$matches[1] => 
                        $request->input($matches[1]) ? 
                            array_merge($request->input($matches[1]), [$matches[2] => $value]) :
                            [$matches[2] => $value]
                    ]);
                }
                $request->request->remove($key);
            }
        }
        return $next($request);
    }
}
