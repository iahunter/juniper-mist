<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class PskPortalPassphraseRules extends BaseModel
{
    public bool $alphaberts_enabled;
    public int $length;
    public int $max_length;
    public int $min_length;
    public bool $numerics_enabled;
    public string $symbols;
    public bool $symbols_enabled;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}