<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class PrivilegeOrg extends BaseModel
{
    public string $org_id;
    public $role;
    public $scope;
    public string $site_id;
    public string $sitegroup_id;
    public $views;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}