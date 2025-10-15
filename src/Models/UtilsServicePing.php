<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class UtilsServicePing extends BaseModel
{
    public int $count;
    public string $host;
    public $node;
    public string $service;
    public int $size;
    public string $tenant;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}