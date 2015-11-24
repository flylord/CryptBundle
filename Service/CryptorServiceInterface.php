<?php

namespace Simplicity\CryptBundle\Service;

interface CryptorServiceInterface
{
    public function encrypt($value);

    public function decrypt($value);
}