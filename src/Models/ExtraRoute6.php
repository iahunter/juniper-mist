<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ExtraRoute6 extends BaseModel
{
    public bool $discard;
    public int $metric;
    public array $next_qualified;
    public bool $no_resolve;
    public int $preference;
    public string $via;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}