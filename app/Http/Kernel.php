protected $routeMiddleware = [
    // ... middleware lainnya
    'auth' => \App\Http\Middleware\Authenticate::class,
    'admin' => \App\Http\Middleware\AdminMiddleware::class, // <-- BARIS INI WAJIB ADA
];