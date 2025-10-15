<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class RoutingPolicyTermAction extends BaseModel
{
    public bool $accept;
    public $add_community;
    public $add_target_vrfs;
    public $community;
    public $exclude_as_path;
    public $exclude_community;
    public $export_communities;
    public string $local_preference;
    public $prepend_as_path;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}