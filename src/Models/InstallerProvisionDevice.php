<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class InstallerProvisionDevice extends BaseModel
{
    public string $deviceprofile_name;
    public bool $for_site;
    public float $height;
    public string $map_id;
    public string $name;
    public int $orientation;
    public string $replacing_mac;
    public string $role;
    public string $site_id;
    public string $site_name;
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