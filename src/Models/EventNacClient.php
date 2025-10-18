<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model EventNacClient
 */
class EventNacClient extends BaseModel
{
    /** @var string */
    public string $ap;
    /** @var mixed */
    public $auth_type;
    /** @var string */
    public string $bssid;
    /** @var mixed */
    public $device_mac;
    /** @var mixed */
    public $dryrun_nacrule_id;
    /** @var mixed */
    public $dryrun_nacrule_matched;
    /** @var mixed */
    public $idp_id;
    /** @var mixed */
    public $idp_role;
    /** @var mixed */
    public $idp_username;
    /** @var mixed */
    public $mac;
    /** @var string */
    public string $mxedge_id;
    /** @var mixed */
    public $nacrule_id;
    /** @var mixed */
    public $nacrule_matched;
    /** @var mixed */
    public $nas_vendor;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $port_id;
    /** @var mixed */
    public $port_type;
    /** @var mixed */
    public $random_mac;
    /** @var mixed */
    public $resp_attrs;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $ssid;
    /** @var mixed */
    public $timestamp;
    /** @var mixed */
    public $type;
    /** @var mixed */
    public $usermac_label;
    /** @var mixed */
    public $username;
    /** @var mixed */
    public $vlan;
    /** @var string */
    public string $vlan_source;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}