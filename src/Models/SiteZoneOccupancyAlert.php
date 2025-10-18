<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteZoneOccupancyAlert
 */
class SiteZoneOccupancyAlert extends BaseModel
{
    /** @var mixed */
    public $email_notifiers;
    /** @var boolean */
    public bool $enabled;
    /** @var integer */
    public int $threshold;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}