<?php

namespace Alura\DesignPattern\Log;

class StdoutLogManager extends  LogManager
{

    function criarLogWritter(): LogWritter
    {
        return  new StdoutWritter();
    }
}