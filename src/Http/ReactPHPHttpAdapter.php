<?php

namespace Alura\DesignPattern\Http;

class ReactPHPHttpAdapter extends HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
       echo "Reach";
    }
}