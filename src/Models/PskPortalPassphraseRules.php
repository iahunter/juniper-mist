<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model PskPortalPassphraseRules
 */
class PskPortalPassphraseRules extends BaseModel
{
    /** @var boolean */
    public bool $alphaberts_enabled;
    /** @var integer */
    public int $length;
    /** @var integer */
    public int $max_length;
    /** @var integer */
    public int $min_length;
    /** @var boolean */
    public bool $numerics_enabled;
    /** @var string */
    public string $symbols;
    /** @var boolean */
    public bool $symbols_enabled;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}