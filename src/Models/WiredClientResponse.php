<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WiredClientResponse extends BaseModel
{
    public string $auth_method;
    public string $auth_state;
    public $device_mac;
    public $device_mac_port;
    public string $dhcp_client_identifier;
    public $dhcp_client_options;
    public string $dhcp_fqdn;
    public string $dhcp_hostname;
    public string $dhcp_request_params;
    public string $dhcp_vendor_class_identifier;
    public $ip;
    public string $mac;
    public $org_id;
    public $port_id;
    public $site_id;
    public $timestamp;
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