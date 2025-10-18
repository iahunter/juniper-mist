<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AssetOfInterest
 */
class AssetOfInterest extends BaseModel
{
    /** @var string */
    public string $ap_mac;
    /** @var number */
    public float $beam;
    /** @var string */
    public string $by;
    /** @var string */
    public string $curr_site;
    /** @var string */
    public string $device_name;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $last_seen;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $manufacture;
    /** @var string */
    public string $map_id;
    /** @var string */
    public string $name;
    /** @var number */
    public float $rssi;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}