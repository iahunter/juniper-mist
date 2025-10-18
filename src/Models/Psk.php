<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Psk
 */
class Psk extends BaseModel
{
    /** @var string */
    public string $admin_sso_id;
    /** @var mixed */
    public $created_time;
    /** @var string */
    public string $email;
    /** @var integer */
    public int $expire_time;
    /** @var integer */
    public int $expiry_notification_time;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $mac;
    /** @var mixed */
    public $macs;
    /** @var integer */
    public int $max_usage;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var string */
    public string $note;
    /** @var boolean */
    public bool $notify_expiry;
    /** @var boolean */
    public bool $notify_on_create_or_edit;
    /** @var string */
    public string $old_passphrase;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $passphrase;
    /** @var string */
    public string $role;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $ssid;
    /** @var mixed */
    public $usage;
    /** @var mixed */
    public $vlan_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}