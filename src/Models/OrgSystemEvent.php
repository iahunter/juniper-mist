<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class OrgSystemEvent extends BaseModel
{
    public string $change_cat;
    public string $metadata;
    public $org_id;
    public string $scope;
    public $site_id;
    public $timestamp;
    public string $type;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}