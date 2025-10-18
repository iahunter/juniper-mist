<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstApplicationDefinition
 */
class ConstApplicationDefinition extends BaseModel
{
    /** @var boolean */
    public bool $app_id;
    /** @var string */
    public string $app_image_url;
    /** @var boolean */
    public bool $app_probe;
    /** @var string */
    public string $category;
    /** @var string */
    public string $group;
    /** @var string */
    public string $key;
    /** @var string */
    public string $name;
    /** @var boolean */
    public bool $signature_based;
    /** @var boolean */
    public bool $ssr_app_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}