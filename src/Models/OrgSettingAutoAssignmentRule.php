<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class OrgSettingAutoAssignmentRule extends BaseModel
{
    public bool $create_new_site_if_needed;
    public string $expression;
    public string $gatewaytemplate_id;
    public string $match_country;
    public $match_device_type;
    public string $match_model;
    public string $model;
    public string $prefix;
    public $src;
    public string $subnet;
    public string $suffix;
    public string $value;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}