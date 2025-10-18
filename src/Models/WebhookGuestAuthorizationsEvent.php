<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookGuestAuthorizationsEvent
 */
class WebhookGuestAuthorizationsEvent extends BaseModel
{
    /** @var string */
    public string $ap;
    /** @var string */
    public string $auth_method;
    /** @var integer */
    public int $authorized_expiring_time;
    /** @var integer */
    public int $authorized_time;
    /** @var string */
    public string $carrier;
    /** @var string */
    public string $client;
    /** @var string */
    public string $company;
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
    public string $mobile;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $sms_gateway;
    /** @var string */
    public string $sponsor_email;
    /** @var string */
    public string $ssid;
    /** @var string */
    public string $wlan_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}