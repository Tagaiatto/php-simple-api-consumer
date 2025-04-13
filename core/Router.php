<?php
namespace Core;

class Router {
    private array $routes = [];

    // Define GET routes
    public function get(string $path, $callback) {
        $this->routes['GET'][$path] = $callback;
    }

    // Dispatch the request to the appropriate controller or callback
    public function dispatch(string $uri) {
        $path = parse_url($uri, PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        // Check if the route exists for the given method and path
        if (isset($this->routes[$method][$path])) {
            $callback = $this->routes[$method][$path];

            // Handle array-style callback [ClassName::class, 'methodName']
            if (is_array($callback)) {
                // If the callback is a controller and method (like [Controller::class, 'method'])
                [$class, $methodName] = $callback;
                call_user_func([new $class, $methodName]);
            } else {
                // If it's a plain callable (like a closure)
                call_user_func($callback);
            }
        } else {
            // If route does not exist, return 404
            http_response_code(404);
            echo "404 Not Found for path: $path";
        }
    }
}