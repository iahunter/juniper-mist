<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WlanDatarates extends BaseModel
{
    public string $eht;
    public string $he;
    public string $ht;
    public $legacy;
    public int $min_rssi;
    public $template;
    public string $vht;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}