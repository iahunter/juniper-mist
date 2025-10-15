<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WlanPortal extends BaseModel
{
    public bool $allow_wlan_id_roam;
    public string $amazon_client_id;
    public string $amazon_client_secret;
    public $amazon_email_domains;
    public bool $amazon_enabled;
    public int $amazon_expire;
    public $auth;
    public string $azure_client_id;
    public string $azure_client_secret;
    public bool $azure_enabled;
    public int $azure_expire;
    public string $azure_tenant_id;
    public string $broadnet_password;
    public string $broadnet_sid;
    public string $broadnet_user_id;
    public bool $bypass_when_cloud_down;
    public string $clickatell_api_key;
    public bool $cross_site;
    public bool $email_enabled;
    public bool $enabled;
    public int $expire;
    public string $external_portal_url;
    public string $facebook_client_id;
    public string $facebook_client_secret;
    public $facebook_email_domains;
    public bool $facebook_enabled;
    public int $facebook_expire;
    public bool $forward;
    public string $forward_url;
    public string $google_client_id;
    public string $google_client_secret;
    public $google_email_domains;
    public bool $google_enabled;
    public int $google_expire;
    public string $gupshup_password;
    public string $gupshup_userid;
    public string $microsoft_client_id;
    public string $microsoft_client_secret;
    public $microsoft_email_domains;
    public bool $microsoft_enabled;
    public int $microsoft_expire;
    public bool $passphrase_enabled;
    public int $passphrase_expire;
    public string $password;
    public bool $predefined_sponsors_enabled;
    public bool $predefined_sponsors_hide_email;
    public bool $privacy;
    public string $puzzel_password;
    public string $puzzel_service_id;
    public string $puzzel_username;
    public string $smsMessageFormat;
    public bool $sms_enabled;
    public int $sms_expire;
    public $sms_provider;
    public string $smsglobal_api_key;
    public string $smsglobal_api_secret;
    public bool $sponsor_auto_approve;
    public $sponsor_email_domains;
    public bool $sponsor_enabled;
    public int $sponsor_expire;
    public $sponsor_link_validity_duration;
    public bool $sponsor_notify_all;
    public bool $sponsor_status_notify;
    public $sponsors;
    public string $sso_default_role;
    public string $sso_forced_role;
    public string $sso_idp_cert;
    public $sso_idp_sign_algo;
    public string $sso_idp_sso_url;
    public string $sso_issuer;
    public $sso_nameid_format;
    public string $telstra_client_id;
    public string $telstra_client_secret;
    public string $twilio_auth_token;
    public string $twilio_phone_number;
    public string $twilio_sid;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}