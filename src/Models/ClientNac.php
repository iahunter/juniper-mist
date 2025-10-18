<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ClientNac
 */
class ClientNac extends BaseModel
{
    /** @var mixed */
    public $ap;
    /** @var mixed */
    public $auth_type;
    /** @var mixed */
    public $cert_cn;
    /** @var mixed */
    public $cert_issuer;
    /** @var mixed */
    public $cert_serial;
    /** @var mixed */
    public $cert_subject;
    /** @var mixed */
    public $client_ip;
    /** @var mixed */
    public $device_mac;
    /** @var boolean */
    public bool $edr_managed;
    /** @var mixed */
    public $edr_provider;
    /** @var mixed */
    public $edr_status;
    /** @var string */
    public string $group;
    /** @var string */
    public string $idp_id;
    /** @var mixed */
    public $idp_role;
    /** @var mixed */
    public $last_ap;
    /** @var mixed */
    public $last_cert_cn;
    /** @var mixed */
    public $last_cert_expiry;
    /** @var mixed */
    public $last_cert_issuer;
    /** @var mixed */
    public $last_cert_serial;
    /** @var mixed */
    public $last_cert_subject;
    /** @var mixed */
    public $last_client_ip;
    /** @var mixed */
    public $last_nacrule_id;
    /** @var mixed */
    public $last_nacrule_name;
    /** @var mixed */
    public $last_nas_vendor;
    /** @var mixed */
    public $last_port_id;
    /** @var mixed */
    public $last_ssid;
    /** @var mixed */
    public $last_status;
    /** @var mixed */
    public $last_username;
    /** @var mixed */
    public $last_vlan;
    /** @var mixed */
    public $mac;
    /** @var mixed */
    public $nacrule_id;
    /** @var boolean */
    public bool $nacrule_matched;
    /** @var mixed */
    public $nacrule_name;
    /** @var string */
    public string $nas_ip;
    /** @var mixed */
    public $nas_vendor;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $port_id;
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

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}