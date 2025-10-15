<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class PrivilegeMsp extends BaseModel
{
    public string $org_id;
    public string $org_name;
    public string $orggroup_id;
    public $role;
    public $scope;
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