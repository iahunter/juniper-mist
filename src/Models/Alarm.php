<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Alarm
 */
class Alarm extends BaseModel
{
    /** @var string */
    public string $ack_admin_id;
    /** @var string */
    public string $ack_admin_name;
    /** @var boolean */
    public bool $acked;
    /** @var integer */
    public int $acked_time;
    /** @var mixed */
    public $aps;
    /** @var mixed */
    public $bssids;
    /** @var integer */
    public int $count;
    /** @var mixed */
    public $gateways;
    /** @var string */
    public string $group;
    /** @var mixed */
    public $hostnames;
    /** @var mixed */
    public $id;
    /** @var number */
    public float $last_seen;
    /** @var string */
    public string $note;
    /** @var mixed */
    public $org_id;
    /** @var integer */
    public int $resolved_time;
    /** @var string */
    public string $severity;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $ssids;
    /** @var mixed */
    public $status;
    /** @var mixed */
    public $switches;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}