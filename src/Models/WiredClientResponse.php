<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WiredClientResponse
 */
class WiredClientResponse extends BaseModel
{
    /** @var string */
    public string $auth_method;
    /** @var string */
    public string $auth_state;
    /** @var mixed */
    public $device_mac;
    /** @var mixed */
    public $device_mac_port;
    /** @var string */
    public string $dhcp_client_identifier;
    /** @var mixed */
    public $dhcp_client_options;
    /** @var string */
    public string $dhcp_fqdn;
    /** @var string */
    public string $dhcp_hostname;
    /** @var string */
    public string $dhcp_request_params;
    /** @var string */
    public string $dhcp_vendor_class_identifier;
    /** @var mixed */
    public $ip;
    /** @var string */
    public string $mac;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $port_id;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $timestamp;
    /** @var mixed */
    public $vlan;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}