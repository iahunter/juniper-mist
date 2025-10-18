<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteEngagementDwellTags
 */
class SiteEngagementDwellTags extends BaseModel
{
    /** @var string */
    public string $bounce;
    /** @var string */
    public string $engaged;
    /** @var string */
    public string $passerby;
    /** @var string */
    public string $stationed;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}