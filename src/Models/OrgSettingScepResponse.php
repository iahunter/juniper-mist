<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class OrgSettingScepResponse extends BaseModel
{
    public $cert_providers;
    public bool $enabled;
    public string $intune_scep_url;
    public string $jamf_access_token;
    public string $jamf_scep_url;
    public string $jamf_webhook_url;
    public bool $suspended;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}