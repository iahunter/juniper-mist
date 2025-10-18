<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsOrg
 */
class StatsOrg extends BaseModel
{
    /** @var string */
    public string $alarmtemplate_id;
    /** @var boolean */
    public bool $allow_mist;
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $modified_time;
    /** @var mixed */
    public $msp_id;
    /** @var string */
    public string $name;
    /** @var integer */
    public int $num_devices;
    /** @var integer */
    public int $num_devices_connected;
    /** @var integer */
    public int $num_devices_disconnected;
    /** @var integer */
    public int $num_inventory;
    /** @var integer */
    public int $num_sites;
    /** @var mixed */
    public $orggroup_ids;
    /** @var integer */
    public int $session_expiry;
    /** @var mixed */
    public $sle;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}