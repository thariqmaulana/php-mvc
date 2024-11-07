<?php

namespace Thariq\PhpMvc\Middleware;

interface Middleware
{
  function before(): void;
}