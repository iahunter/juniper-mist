<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model InstallerProvisionDevice
 */
class InstallerProvisionDevice extends BaseModel
{
    /** @var string */
    public string $deviceprofile_name;
    /** @var boolean */
    public bool $for_site;
    /** @var number */
    public float $height;
    /** @var string */
    public string $map_id;
    /** @var string */
    public string $name;
    /** @var integer */
    public int $orientation;
    /** @var string */
    public string $replacing_mac;
    /** @var string */
    public string $role;
    /** @var string */
    public string $site_id;
    /** @var string */
    public string $site_name;
    /** @var number */
    public float $x;
    /** @var number */
    public float $y;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}