<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SimpleAlertDnsFailure
 */
class SimpleAlertDnsFailure extends BaseModel
{
    /** @var integer */
    public int $client_count;
    /** @var integer */
    public int $duration;
    /** @var integer */
    public int $incident_count;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}