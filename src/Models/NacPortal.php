<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class NacPortal extends BaseModel
{
    public $access_type;
    public string $bg_image_url;
    public int $cert_expire_time;
    public $eap_type;
    public bool $enable_telemetry;
    public int $expiry_notification_time;
    public string $name;
    public bool $notify_expiry;
    public $portal;
    public string $portal_authorize_jwt_secret;
    public string $portal_authorize_url;
    public string $portal_sso_url;
    public string $ssid;
    public $sso;
    public string $template_url;
    public string $thumbnail_url;
    public string $tos;
    public $type;
    public string $ui_url;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}