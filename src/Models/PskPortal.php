<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model PskPortal
 */
class PskPortal extends BaseModel
{
    /** @var mixed */
    public $auth;
    /** @var string */
    public string $bg_image_url;
    /** @var boolean */
    public bool $cleanup_psk;
    /** @var mixed */
    public $created_time;
    /** @var integer */
    public int $expire_time;
    /** @var integer */
    public int $expiry_notification_time;
    /** @var boolean */
    public bool $hide_psks_created_by_other_admins;
    /** @var mixed */
    public $id;
    /** @var integer */
    public int $max_usage;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var string */
    public string $notification_renew_url;
    /** @var boolean */
    public bool $notify_expiry;
    /** @var boolean */
    public bool $notify_on_create_or_edit;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $passphrase_rules;
    /** @var mixed */
    public $required_fields;
    /** @var string */
    public string $role;
    /** @var string */
    public string $ssid;
    /** @var mixed */
    public $sso;
    /** @var string */
    public string $template_url;
    /** @var string */
    public string $thumbnail_url;
    /** @var mixed */
    public $type;
    /** @var mixed */
    public $vlan_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}