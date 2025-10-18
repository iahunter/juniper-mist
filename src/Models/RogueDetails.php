<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RogueDetails
 */
class RogueDetails extends BaseModel
{
    /** @var string */
    public string $manufacture;
    /** @var boolean */
    public bool $seen_as_client;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}