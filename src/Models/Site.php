<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Site extends BaseModel
{
    public string $address;
    public string $alarmtemplate_id;
    public string $aptemplate_id;
    public string $country_code;
    public $created_time;
    public string $gatewaytemplate_id;
    public $id;
    public $latlng;
    public $modified_time;
    public string $name;
    public string $networktemplate_id;
    public string $notes;
    public $org_id;
    public string $rftemplate_id;
    public string $secpolicy_id;
    public $sitegroup_ids;
    public string $sitetemplate_id;
    public string $timezone;
    public int $tzoffset;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}