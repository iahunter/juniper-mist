<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ServicePathEvent extends BaseModel
{
    public string $mac;
    public string $model;
    public $org_id;
    public string $policy;
    public string $port_id;
    public $site_id;
    public string $text;
    public $timestamp;
    public string $type;
    public string $version;
    public string $vpn_name;
    public string $vpn_path;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}