<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseTroubleshootItem
 */
class ResponseTroubleshootItem extends BaseModel
{
    /** @var string */
    public string $category;
    /** @var string */
    public string $reason;
    /** @var string */
    public string $recommendation;
    /** @var string */
    public string $text;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}