<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WebhookClientLatencyEvent extends BaseModel
{
    public float $avg_auth;
    public float $avg_dhcp;
    public float $avg_dns;
    public float $max_auth;
    public float $max_dhcp;
    public float $max_dns;
    public float $min_auth;
    public float $min_dhcp;
    public float $min_dns;
    public $org_id;
    public $site_id;
    public $timestamp;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}