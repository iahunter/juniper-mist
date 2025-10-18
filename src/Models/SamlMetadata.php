<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SamlMetadata
 */
class SamlMetadata extends BaseModel
{
    /** @var string */
    public string $acs_url;
    /** @var string */
    public string $entity_id;
    /** @var string */
    public string $logout_url;
    /** @var string */
    public string $metadata;
    /** @var string */
    public string $scim_base_url;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}