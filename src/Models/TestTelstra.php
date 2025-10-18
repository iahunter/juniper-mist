<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model TestTelstra
 */
class TestTelstra extends BaseModel
{
    /** @var string */
    public string $telstra_client_id;
    /** @var string */
    public string $telstra_client_secret;
    /** @var string */
    public string $to;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}