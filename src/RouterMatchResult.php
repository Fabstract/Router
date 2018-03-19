<?php

namespace Fabstract\Component\Router;

class RouterMatchResult
{
    /**
     * @var RouteAwareInterface
     */
    private $route_aware = null;
    /**
     * @var string
     */
    private $rest_of_uri = null;
    /**
     * @var mixed[]
     */
    private $parameters = [];

    /**
     * RouterMatchResult constructor.
     * @param RouteAwareInterface $route_aware
     * @param string $rest_of_uri
     * @param mixed[] $parameters
     */
    public function __construct($route_aware, $rest_of_uri, $parameters)
    {
        $this->route_aware = $route_aware;
        $this->rest_of_uri = $rest_of_uri;
        $this->parameters = $parameters;
    }

    /**
     * @return RouteAwareInterface
     */
    public function getRouteAware()
    {
        return $this->route_aware;
    }

    /**
     * @return string
     */
    public function getRestOfUri()
    {
        return $this->rest_of_uri;
    }

    /**
     * @return mixed[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }
}
