<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstMarvisClientVersion
 */
class ConstMarvisClientVersion extends BaseModel
{
    /** @var string */
    public string $label;
    /** @var string */
    public string $notes;
    /** @var string */
    public string $os;
    /** @var string */
    public string $url;
    /** @var string */
    public string $version;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}