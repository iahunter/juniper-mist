<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Recaptcha
 */
class Recaptcha extends BaseModel
{
    /** @var mixed */
    public $flavor;
    /** @var boolean */
    public bool $required;
    /** @var string */
    public string $sitekey;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}