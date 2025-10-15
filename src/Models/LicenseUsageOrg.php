<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class LicenseUsageOrg extends BaseModel
{
    public bool $for_site;
    public $fully_loaded;
    public int $num_devices;
    public $site_id;
    public $summary;
    public $usages;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}