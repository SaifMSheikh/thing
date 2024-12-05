<?php
$routes = [
    '/' => 'homepage.php',
    '/about' => 'about.php',
    '/services' => 'service.php',
    '/contact' => 'contact.php',
];

// Check for dynamic routes (e.g., /post/123)
if (preg_match('/^\/post\/(\d+)$/', $request, $matches)) {
    $postId = $matches[1];
    // Include the post page and pass the $postId
    require 'post.php';  // In post.php, use $postId to load the post content
} elseif (array_key_exists($request, $routes)) {
    // Standard static route
    require $routes[$request];
} else {
    // 404 Page Not Found
    http_response_code(404);
    echo "<h1>404 - Page Not Found</h1><p>The page you are looking for doesn't exist.</p>";
}
