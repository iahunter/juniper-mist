<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponsePskPortalLogsSearchItem extends BaseModel
{
    public $id;
    public string $message;
    public string $name_id;
    public $org_id;
    public string $psk_id;
    public string $psk_name;
    public string $pskportal_id;
    public $timestamp;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}