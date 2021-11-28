<?php

namespace Swagger\Client\Eve\Test;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class Client extends \GuzzleHttp\Client
{
    private $responses = [];

    public function __construct(ResponseInterface ...$responses)
    {
        parent::__construct([]);

        $this->responses = $responses;
    }

    public function send(RequestInterface $request, array $options = []): ResponseInterface
    {
        return array_shift($this->responses);
    }
}
