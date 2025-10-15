<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Sso extends BaseModel
{
    public $created_time;
    public string $custom_logout_url;
    public string $default_role;
    public string $domain;
    public string $group_filter;
    public $id;
    public string $idp_cert;
    public $idp_sign_algo;
    public string $idp_sso_url;
    public $idp_type;
    public bool $ignore_unmatched_roles;
    public string $issuer;
    public string $ldap_base_dn;
    public string $ldap_bind_dn;
    public string $ldap_bind_password;
    public $ldap_cacerts;
    public string $ldap_client_cert;
    public string $ldap_client_key;
    public string $ldap_group_attr;
    public string $ldap_group_dn;
    public bool $ldap_resolve_groups;
    public $ldap_server_hosts;
    public $ldap_type;
    public string $ldap_user_filter;
    public string $member_filter;
    public $modified_time;
    public $msp_id;
    public $mxedge_proxy;
    public string $name;
    public $nameid_format;
    public string $oauth_cc_client_id;
    public string $oauth_cc_client_secret;
    public string $oauth_discovery_url;
    public $oauth_ping_identity_region;
    public string $oauth_ropc_client_id;
    public string $oauth_ropc_client_secret;
    public string $oauth_tenant_id;
    public $oauth_type;
    public $openroaming;
    public $org_id;
    public string $role_attr_extraction;
    public string $role_attr_from;
    public bool $scim_enabled;
    public string $scim_secret_token;
    public $site_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}