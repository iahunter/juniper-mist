<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ClientNac extends BaseModel
{
    public $ap;
    public $auth_type;
    public $cert_cn;
    public $cert_issuer;
    public $cert_serial;
    public $cert_subject;
    public $client_ip;
    public $device_mac;
    public bool $edr_managed;
    public $edr_provider;
    public $edr_status;
    public string $group;
    public string $idp_id;
    public $idp_role;
    public $last_ap;
    public $last_cert_cn;
    public $last_cert_expiry;
    public $last_cert_issuer;
    public $last_cert_serial;
    public $last_cert_subject;
    public $last_client_ip;
    public $last_nacrule_id;
    public $last_nacrule_name;
    public $last_nas_vendor;
    public $last_port_id;
    public $last_ssid;
    public $last_status;
    public $last_username;
    public $last_vlan;
    public $mac;
    public $nacrule_id;
    public bool $nacrule_matched;
    public $nacrule_name;
    public string $nas_ip;
    public $nas_vendor;
    public $org_id;
    public $port_id;
    public $random_mac;
    public $resp_attrs;
    public $site_id;
    public $ssid;
    public $timestamp;
    public $type;
    public $usermac_label;
    public $username;
    public $vlan;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}