// app/Http/Kernel.php
<?php
protected $routeMiddleware = [
    // other middlewares...
    'checkUserType' => \App\Http\Middleware\CheckUserType::class,
];
