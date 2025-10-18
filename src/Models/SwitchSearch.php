<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SwitchSearch
 */
class SwitchSearch extends BaseModel
{
    /** @var boolean */
    public bool $clustered;
    /** @var boolean */
    public bool $evpn_missing_links;
    /** @var string */
    public string $evpntopo_id;
    /** @var string */
    public string $ext_ip;
    /** @var mixed */
    public $hostname;
    /** @var string */
    public string $ip;
    /** @var string */
    public string $last_config_status;
    /** @var string */
    public string $last_hostname;
    /** @var string */
    public string $last_trouble_code;
    /** @var mixed */
    public $last_trouble_timestamp;
    /** @var string */
    public string $mac;
    /** @var boolean */
    public bool $managed;
    /** @var string */
    public string $model;
    /** @var integer */
    public int $num_members;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $radius_stats;
    /** @var string */
    public string $role;
    /** @var mixed */
    public $site_id;
    /** @var boolean */
    public bool $time_drifted;
    /** @var mixed */
    public $timestamp;
    /** @var mixed */
    public $type;
    /** @var integer */
    public int $uptime;
    /** @var string */
    public string $version;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}