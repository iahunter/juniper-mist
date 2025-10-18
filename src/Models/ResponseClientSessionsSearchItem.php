<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseClientSessionsSearchItem
 */
class ResponseClientSessionsSearchItem extends BaseModel
{
    /** @var string */
    public string $ap;
    /** @var string */
    public string $band;
    /** @var string */
    public string $client_manufacture;
    /** @var number */
    public float $connect;
    /** @var number */
    public float $disconnect;
    /** @var number */
    public float $duration;
    /** @var string */
    public string $mac;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $ssid;
    /** @var mixed */
    public $tags;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $wlan_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}