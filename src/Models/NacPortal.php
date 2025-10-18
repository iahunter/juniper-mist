<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model NacPortal
 */
class NacPortal extends BaseModel
{
    /** @var mixed */
    public $access_type;
    /** @var string */
    public string $bg_image_url;
    /** @var integer */
    public int $cert_expire_time;
    /** @var mixed */
    public $eap_type;
    /** @var boolean */
    public bool $enable_telemetry;
    /** @var integer */
    public int $expiry_notification_time;
    /** @var string */
    public string $name;
    /** @var boolean */
    public bool $notify_expiry;
    /** @var mixed */
    public $portal;
    /** @var string */
    public string $portal_authorize_jwt_secret;
    /** @var string */
    public string $portal_authorize_url;
    /** @var string */
    public string $portal_sso_url;
    /** @var string */
    public string $ssid;
    /** @var mixed */
    public $sso;
    /** @var string */
    public string $template_url;
    /** @var string */
    public string $thumbnail_url;
    /** @var string */
    public string $tos;
    /** @var mixed */
    public $type;
    /** @var string */
    public string $ui_url;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}