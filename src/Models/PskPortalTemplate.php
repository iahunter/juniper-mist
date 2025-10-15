<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class PskPortalTemplate extends BaseModel
{
    public $alignment;
    public string $color;
    public string $logo;
    public bool $poweredBy;
    public bool $tos;
    public string $tosAcceptLabel;
    public string $tosError;
    public string $tosLink;
    public string $tosText;
    public string $tosUrl;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}