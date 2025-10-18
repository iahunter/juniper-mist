<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Sso
 */
class Sso extends BaseModel
{
    /** @var mixed */
    public $created_time;
    /** @var string */
    public string $custom_logout_url;
    /** @var string */
    public string $default_role;
    /** @var string */
    public string $domain;
    /** @var string */
    public string $group_filter;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $idp_cert;
    /** @var mixed */
    public $idp_sign_algo;
    /** @var string */
    public string $idp_sso_url;
    /** @var mixed */
    public $idp_type;
    /** @var boolean */
    public bool $ignore_unmatched_roles;
    /** @var string */
    public string $issuer;
    /** @var string */
    public string $ldap_base_dn;
    /** @var string */
    public string $ldap_bind_dn;
    /** @var string */
    public string $ldap_bind_password;
    /** @var mixed */
    public $ldap_cacerts;
    /** @var string */
    public string $ldap_client_cert;
    /** @var string */
    public string $ldap_client_key;
    /** @var string */
    public string $ldap_group_attr;
    /** @var string */
    public string $ldap_group_dn;
    /** @var boolean */
    public bool $ldap_resolve_groups;
    /** @var mixed */
    public $ldap_server_hosts;
    /** @var mixed */
    public $ldap_type;
    /** @var string */
    public string $ldap_user_filter;
    /** @var string */
    public string $member_filter;
    /** @var mixed */
    public $modified_time;
    /** @var mixed */
    public $msp_id;
    /** @var mixed */
    public $mxedge_proxy;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $nameid_format;
    /** @var string */
    public string $oauth_cc_client_id;
    /** @var string */
    public string $oauth_cc_client_secret;
    /** @var string */
    public string $oauth_discovery_url;
    /** @var mixed */
    public $oauth_ping_identity_region;
    /** @var string */
    public string $oauth_ropc_client_id;
    /** @var string */
    public string $oauth_ropc_client_secret;
    /** @var string */
    public string $oauth_tenant_id;
    /** @var mixed */
    public $oauth_type;
    /** @var mixed */
    public $openroaming;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $role_attr_extraction;
    /** @var string */
    public string $role_attr_from;
    /** @var boolean */
    public bool $scim_enabled;
    /** @var string */
    public string $scim_secret_token;
    /** @var mixed */
    public $site_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}