protected $routeMiddleware = [
    // Middleware lainnya
    'check.user.level' => \App\Http\Middleware\CheckUserLevel::class,
];
