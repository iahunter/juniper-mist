<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model GuestOrg
 */
class GuestOrg extends BaseModel
{
    /** @var string */
    public string $access_code_email;
    /** @var boolean */
    public bool $allow_wlan_id_roam;
    /** @var string */
    public string $ap_mac;
    /** @var string */
    public string $auth_method;
    /** @var boolean */
    public bool $authorized;
    /** @var number */
    public float $authorized_expiring_time;
    /** @var number */
    public float $authorized_time;
    /** @var string */
    public string $company;
    /** @var boolean */
    public bool $cross_site;
    /** @var string */
    public string $email;
    /** @var string */
    public string $field1;
    /** @var string */
    public string $field2;
    /** @var string */
    public string $field3;
    /** @var string */
    public string $field4;
    /** @var string */
    public string $mac;
    /** @var integer */
    public int $minutes;
    /** @var string */
    public string $name;
    /** @var boolean */
    public bool $random_mac;
    /** @var string */
    public string $ssid;
    /** @var string */
    public string $wlan_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}