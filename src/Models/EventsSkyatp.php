<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model EventsSkyatp
 */
class EventsSkyatp extends BaseModel
{
    /** @var string */
    public string $device_mac;
    /** @var boolean */
    public bool $for_site;
    /** @var string */
    public string $ip;
    /** @var string */
    public string $mac;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $site_id;
    /** @var integer */
    public int $threat_level;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}