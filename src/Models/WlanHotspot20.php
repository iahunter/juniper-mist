<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WlanHotspot20 extends BaseModel
{
    public $domain_name;
    public bool $enabled;
    public $nai_realms;
    public $operators;
    public $rcoi;
    public string $venue_name;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}