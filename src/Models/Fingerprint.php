<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Fingerprint extends BaseModel
{
    public string $family;
    public string $mac;
    public string $mfg;
    public string $model;
    public $org_id;
    public string $os;
    public string $os_type;
    public bool $random_mac;
    public $site_id;
    public $timestamp;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}