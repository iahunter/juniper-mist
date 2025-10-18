<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookClientLatencyEvent
 */
class WebhookClientLatencyEvent extends BaseModel
{
    /** @var number */
    public float $avg_auth;
    /** @var number */
    public float $avg_dhcp;
    /** @var number */
    public float $avg_dns;
    /** @var number */
    public float $max_auth;
    /** @var number */
    public float $max_dhcp;
    /** @var number */
    public float $max_dns;
    /** @var number */
    public float $min_auth;
    /** @var number */
    public float $min_dhcp;
    /** @var number */
    public float $min_dns;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $timestamp;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}