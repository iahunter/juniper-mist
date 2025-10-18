<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsGatewayModuleStatItem
 */
class StatsGatewayModuleStatItem extends BaseModel
{
    /** @var string */
    public string $backup_version;
    /** @var string */
    public string $bios_version;
    /** @var string */
    public string $cpld_version;
    /** @var mixed */
    public $fans;
    /** @var string */
    public string $fpga_version;
    /** @var mixed */
    public $last_seen;
    /** @var boolean */
    public bool $locating;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $model;
    /** @var mixed */
    public $network_resources;
    /** @var string */
    public string $optics_cpld_version;
    /** @var string */
    public string $pending_version;
    /** @var mixed */
    public $poe;
    /** @var string */
    public string $poe_version;
    /** @var string */
    public string $power_cpld_version;
    /** @var mixed */
    public $psus;
    /** @var string */
    public string $re_fpga_version;
    /** @var string */
    public string $recovery_version;
    /** @var string */
    public string $serial;
    /** @var string */
    public string $status;
    /** @var mixed */
    public $temperatures;
    /** @var string */
    public string $tmc_fpga_version;
    /** @var string */
    public string $uboot_version;
    /** @var integer */
    public int $uptime;
    /** @var mixed */
    public $vc_links;
    /** @var string */
    public string $vc_mode;
    /** @var string */
    public string $vc_role;
    /** @var string */
    public string $vc_state;
    /** @var string */
    public string $version;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}