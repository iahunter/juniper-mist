<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ApIot extends BaseModel
{
    public $A1;
    public $A2;
    public $A3;
    public $A4;
    public $DI1;
    public $DI2;
    public $DO;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}