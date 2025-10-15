<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class AdminPrivilege extends BaseModel
{
    public $msp_id;
    public string $msp_logo_url;
    public string $msp_name;
    public string $msp_url;
    public string $name;
    public $org_id;
    public string $org_name;
    public $orggroup_ids;
    public $role;
    public $scope;
    public $site_id;
    public $sitegroup_ids;
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