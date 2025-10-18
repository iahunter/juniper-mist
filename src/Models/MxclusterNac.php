<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MxclusterNac
 */
class MxclusterNac extends BaseModel
{
    /** @var integer */
    public int $acct_server_port;
    /** @var integer */
    public int $auth_server_port;
    /** @var object */
    public $client_ips;
    /** @var boolean */
    public bool $enabled;
    /** @var string */
    public string $secret;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}