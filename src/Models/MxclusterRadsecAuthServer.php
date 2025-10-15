<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class MxclusterRadsecAuthServer extends BaseModel
{
    public string $host;
    public bool $inband_status_check;
    public int $inband_status_interval;
    public bool $keywrap_enabled;
    public $keywrap_format;
    public string $keywrap_kek;
    public string $keywrap_mack;
    public int $port;
    public int $retry;
    public string $secret;
    public $ssids;
    public int $timeout;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}