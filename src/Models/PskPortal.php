<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class PskPortal extends BaseModel
{
    public $auth;
    public string $bg_image_url;
    public bool $cleanup_psk;
    public $created_time;
    public int $expire_time;
    public int $expiry_notification_time;
    public bool $hide_psks_created_by_other_admins;
    public $id;
    public int $max_usage;
    public $modified_time;
    public string $name;
    public string $notification_renew_url;
    public bool $notify_expiry;
    public bool $notify_on_create_or_edit;
    public $org_id;
    public $passphrase_rules;
    public $required_fields;
    public string $role;
    public string $ssid;
    public $sso;
    public string $template_url;
    public string $thumbnail_url;
    public $type;
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