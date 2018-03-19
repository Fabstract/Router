<?php

namespace Fabstract\Component\Router;

interface RouterInterface
{
    /**
     * @param string $shortcut
     * @param string $pattern
     * @return $this
     */
    public function defineShortcut($shortcut, $pattern);

    /**
     * @param string $uri
     * @param RouteAwareInterface[] $route_aware_list
     * @return RouterMatchResult|null
     */
    public function match($uri, $route_aware_list);
}
