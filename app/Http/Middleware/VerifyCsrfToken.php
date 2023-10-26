<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/dynamic_first_method',
        '/method_2',
        '/update_student/*',
        '/delete_student/*',
        '/get_by_age/*'
    ];
}
