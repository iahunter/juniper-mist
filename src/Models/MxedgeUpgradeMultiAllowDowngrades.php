<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class MxedgeUpgradeMultiAllowDowngrades extends BaseModel
{
    public bool $mxagent;
    public bool $mxdas;
    public bool $mxocproxy;
    public bool $radsecproxy;
    public bool $tunterm;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}