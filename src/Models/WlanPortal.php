<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WlanPortal
 */
class WlanPortal extends BaseModel
{
    /** @var boolean */
    public bool $allow_wlan_id_roam;
    /** @var string */
    public string $amazon_client_id;
    /** @var string */
    public string $amazon_client_secret;
    /** @var mixed */
    public $amazon_email_domains;
    /** @var boolean */
    public bool $amazon_enabled;
    /** @var integer */
    public int $amazon_expire;
    /** @var mixed */
    public $auth;
    /** @var string */
    public string $azure_client_id;
    /** @var string */
    public string $azure_client_secret;
    /** @var boolean */
    public bool $azure_enabled;
    /** @var integer */
    public int $azure_expire;
    /** @var string */
    public string $azure_tenant_id;
    /** @var string */
    public string $broadnet_password;
    /** @var string */
    public string $broadnet_sid;
    /** @var string */
    public string $broadnet_user_id;
    /** @var boolean */
    public bool $bypass_when_cloud_down;
    /** @var string */
    public string $clickatell_api_key;
    /** @var boolean */
    public bool $cross_site;
    /** @var boolean */
    public bool $email_enabled;
    /** @var boolean */
    public bool $enabled;
    /** @var integer */
    public int $expire;
    /** @var string */
    public string $external_portal_url;
    /** @var string */
    public string $facebook_client_id;
    /** @var string */
    public string $facebook_client_secret;
    /** @var mixed */
    public $facebook_email_domains;
    /** @var boolean */
    public bool $facebook_enabled;
    /** @var integer */
    public int $facebook_expire;
    /** @var boolean */
    public bool $forward;
    /** @var string */
    public string $forward_url;
    /** @var string */
    public string $google_client_id;
    /** @var string */
    public string $google_client_secret;
    /** @var mixed */
    public $google_email_domains;
    /** @var boolean */
    public bool $google_enabled;
    /** @var integer */
    public int $google_expire;
    /** @var string */
    public string $gupshup_password;
    /** @var string */
    public string $gupshup_userid;
    /** @var string */
    public string $microsoft_client_id;
    /** @var string */
    public string $microsoft_client_secret;
    /** @var mixed */
    public $microsoft_email_domains;
    /** @var boolean */
    public bool $microsoft_enabled;
    /** @var integer */
    public int $microsoft_expire;
    /** @var boolean */
    public bool $passphrase_enabled;
    /** @var integer */
    public int $passphrase_expire;
    /** @var string */
    public string $password;
    /** @var boolean */
    public bool $predefined_sponsors_enabled;
    /** @var boolean */
    public bool $predefined_sponsors_hide_email;
    /** @var boolean */
    public bool $privacy;
    /** @var string */
    public string $puzzel_password;
    /** @var string */
    public string $puzzel_service_id;
    /** @var string */
    public string $puzzel_username;
    /** @var string */
    public string $smsMessageFormat;
    /** @var boolean */
    public bool $sms_enabled;
    /** @var integer */
    public int $sms_expire;
    /** @var mixed */
    public $sms_provider;
    /** @var string */
    public string $smsglobal_api_key;
    /** @var string */
    public string $smsglobal_api_secret;
    /** @var boolean */
    public bool $sponsor_auto_approve;
    /** @var mixed */
    public $sponsor_email_domains;
    /** @var boolean */
    public bool $sponsor_enabled;
    /** @var integer */
    public int $sponsor_expire;
    /** @var mixed */
    public $sponsor_link_validity_duration;
    /** @var boolean */
    public bool $sponsor_notify_all;
    /** @var boolean */
    public bool $sponsor_status_notify;
    /** @var mixed */
    public $sponsors;
    /** @var string */
    public string $sso_default_role;
    /** @var string */
    public string $sso_forced_role;
    /** @var string */
    public string $sso_idp_cert;
    /** @var mixed */
    public $sso_idp_sign_algo;
    /** @var string */
    public string $sso_idp_sso_url;
    /** @var string */
    public string $sso_issuer;
    /** @var mixed */
    public $sso_nameid_format;
    /** @var string */
    public string $telstra_client_id;
    /** @var string */
    public string $telstra_client_secret;
    /** @var string */
    public string $twilio_auth_token;
    /** @var string */
    public string $twilio_phone_number;
    /** @var string */
    public string $twilio_sid;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}