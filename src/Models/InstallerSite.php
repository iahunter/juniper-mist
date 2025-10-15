<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class InstallerSite extends BaseModel
{
    public string $address;
    public string $country_code;
    public $id;
    public $latlng;
    public string $name;
    public string $rftemplate_name;
    public $sitegroup_names;
    public string $timezone;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}