<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsWxrule extends BaseModel
{
    public $action;
    public $client_mac;
    public $dst_allow_wxtags;
    public $dst_deny_wxtags;
    public $dst_wxtags;
    public string $name;
    public int $order;
    public $src_wxtags;
    public array $usage;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}