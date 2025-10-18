<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstLanguage
 */
class ConstLanguage extends BaseModel
{
    /** @var string */
    public string $display;
    /** @var string */
    public string $display_native;
    /** @var string */
    public string $key;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}