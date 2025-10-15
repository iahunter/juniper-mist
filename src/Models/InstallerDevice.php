<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class InstallerDevice extends BaseModel
{
    public bool $connected;
    public string $deviceprofile_name;
    public string $ext_ip;
    public float $height;
    public string $ip;
    public $last_seen;
    public string $mac;
    public string $map_id;
    public string $model;
    public string $name;
    public int $orientation;
    public string $serial;
    public string $site_name;
    public int $uptime;
    public string $vc_mac;
    public string $version;
    public float $x;
    public float $y;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}