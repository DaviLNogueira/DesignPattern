<?php

namespace Alura\DesignPattern;

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;

class PdoConnection extends \PDO
{
    private  static ?self $instance = null;

    private function __construct(string $dsn, ?string $username = null, ?string $password = null, ?array $options = null)
    {
        parent::__construct($dsn, $username, $password, $options);
    }

    public  static function getInstance(string $dsn, ?string $username = null, ?string $password = null, ?array $options = null): PdoConnection|static|null
    {
        if(is_null(self::$instance)){
            self::$instance = new static($dsn,$username,$password,array());
        }

        return self::$instance;
    }
}