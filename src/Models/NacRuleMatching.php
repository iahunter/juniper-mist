<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class NacRuleMatching extends BaseModel
{
    public $auth_type;
    public $family;
    public $mfg;
    public $model;
    public $nactags;
    public $os_type;
    public $port_types;
    public $site_ids;
    public $sitegroup_ids;
    public $vendor;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}