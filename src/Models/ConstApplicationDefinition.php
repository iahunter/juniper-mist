<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ConstApplicationDefinition extends BaseModel
{
    public bool $app_id;
    public string $app_image_url;
    public bool $app_probe;
    public string $category;
    public string $group;
    public string $key;
    public string $name;
    public bool $signature_based;
    public bool $ssr_app_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}