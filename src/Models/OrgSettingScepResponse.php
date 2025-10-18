<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSettingScepResponse
 */
class OrgSettingScepResponse extends BaseModel
{
    /** @var mixed */
    public $cert_providers;
    /** @var boolean */
    public bool $enabled;
    /** @var string */
    public string $intune_scep_url;
    /** @var string */
    public string $jamf_access_token;
    /** @var string */
    public string $jamf_scep_url;
    /** @var string */
    public string $jamf_webhook_url;
    /** @var boolean */
    public bool $suspended;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}