<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SamlMetadata extends BaseModel
{
    public string $acs_url;
    public string $entity_id;
    public string $logout_url;
    public string $metadata;
    public string $scim_base_url;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}