<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class UtilsTraceroute extends BaseModel
{
    public string $host;
    public string $network;
    public $node;
    public int $port;
    public $protocol;
    public int $timeout;
    public string $vrf;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}