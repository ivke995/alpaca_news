<?php

namespace App\Exceptions;

use Exception;

class ScrapeException extends Exception
{
    protected $message = 'Scrape exception happened';
    protected $code = 0;

    public function __construct(string $message, int $code = 1)
    {
        parent::__construct();

        $this->message = $message;
        $this->code = $code;
    }

    public function __toString(): string
    {
        return '[' . $this->code . '] ' . $this->message;
    }

    public function handle()
    {

    }
}
