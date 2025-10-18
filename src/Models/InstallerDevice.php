<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model InstallerDevice
 */
class InstallerDevice extends BaseModel
{
    /** @var boolean */
    public bool $connected;
    /** @var string */
    public string $deviceprofile_name;
    /** @var string */
    public string $ext_ip;
    /** @var number */
    public float $height;
    /** @var string */
    public string $ip;
    /** @var mixed */
    public $last_seen;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $map_id;
    /** @var string */
    public string $model;
    /** @var string */
    public string $name;
    /** @var integer */
    public int $orientation;
    /** @var string */
    public string $serial;
    /** @var string */
    public string $site_name;
    /** @var integer */
    public int $uptime;
    /** @var string */
    public string $vc_mac;
    /** @var string */
    public string $version;
    /** @var number */
    public float $x;
    /** @var number */
    public float $y;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}