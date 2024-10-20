<?php
declare(strict_types=1);
namespace App\Services;

interface Geolocation
{
    public function getLangCodeByIp(string $ip) : string;
}
