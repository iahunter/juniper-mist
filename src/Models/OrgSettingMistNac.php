<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class OrgSettingMistNac extends BaseModel
{
    public $cacerts;
    public string $default_idp_id;
    public bool $disable_rsae_algorithms;
    public int $eap_ssl_security_level;
    public bool $eu_only;
    public $idp_machine_cert_lookup_field;
    public $idp_user_cert_lookup_field;
    public $idps;
    public $server_cert;
    public $use_ip_version;
    public bool $use_ssl_port;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}