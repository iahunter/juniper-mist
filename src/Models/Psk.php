<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Psk extends BaseModel
{
    public string $admin_sso_id;
    public $created_time;
    public string $email;
    public int $expire_time;
    public int $expiry_notification_time;
    public $id;
    public string $mac;
    public $macs;
    public int $max_usage;
    public $modified_time;
    public string $name;
    public string $note;
    public bool $notify_expiry;
    public bool $notify_on_create_or_edit;
    public string $old_passphrase;
    public $org_id;
    public string $passphrase;
    public string $role;
    public $site_id;
    public string $ssid;
    public $usage;
    public $vlan_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}