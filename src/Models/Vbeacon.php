<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Vbeacon
 */
class Vbeacon extends BaseModel
{
    /** @var mixed */
    public $created_time;
    /** @var boolean */
    public bool $for_site;
    /** @var mixed */
    public $id;
    /** @var integer */
    public int $major;
    /** @var string */
    public string $map_id;
    /** @var string */
    public string $message;
    /** @var integer */
    public int $minor;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;
    /** @var integer */
    public int $power;
    /** @var mixed */
    public $power_mode;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $url;
    /** @var string */
    public string $uuid;
    /** @var string */
    public string $wayfinding_nodename;
    /** @var number */
    public float $x;
    /** @var number */
    public float $y;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}