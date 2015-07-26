<?php
namespace Wandu\Router;

use Closure;
use Psr\Http\Message\ServerRequestInterface;

interface MiddlewareInterface
{
    /**
     * @param ServerRequestInterface $request
     * @param callable $next
     * @return mixed
     */
    public function handle(ServerRequestInterface $request, Closure $next);
}