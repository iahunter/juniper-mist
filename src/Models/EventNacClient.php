<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class EventNacClient extends BaseModel
{
    public string $ap;
    public $auth_type;
    public string $bssid;
    public $device_mac;
    public $dryrun_nacrule_id;
    public $dryrun_nacrule_matched;
    public $idp_id;
    public $idp_role;
    public $idp_username;
    public $mac;
    public string $mxedge_id;
    public $nacrule_id;
    public $nacrule_matched;
    public $nas_vendor;
    public $org_id;
    public $port_id;
    public $port_type;
    public $random_mac;
    public $resp_attrs;
    public $site_id;
    public $ssid;
    public $timestamp;
    public $type;
    public $usermac_label;
    public $username;
    public $vlan;
    public string $vlan_source;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}