<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard;

use Inertia\Inertia;
use Inertia\Response;
use Spatie\RouteAttributes\Attributes\Get;

class DashboardController
{
    #[Get('/dashboard', 'dashboard')]
    public function __invoke(): Response
    {
        return Inertia::render('Dashboard');
    }
}
