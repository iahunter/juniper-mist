<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Beacon
 */
class Beacon extends BaseModel
{
    /** @var mixed */
    public $created_time;
    /** @var string */
    public string $eddystone_instance;
    /** @var string */
    public string $eddystone_namespace;
    /** @var string */
    public string $eddystone_url;
    /** @var boolean */
    public bool $for_site;
    /** @var integer */
    public int $ibeacon_major;
    /** @var integer */
    public int $ibeacon_minor;
    /** @var string */
    public string $ibeacon_uuid;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $map_id;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;
    /** @var integer */
    public int $power;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $type;
    /** @var number */
    public float $x;
    /** @var number */
    public float $y;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}