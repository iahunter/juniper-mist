<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Ticket
 */
class Ticket extends BaseModel
{
    /** @var string */
    public string $case_number;
    /** @var mixed */
    public $comments;
    /** @var integer */
    public int $created_at;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $requester;
    /** @var string */
    public string $requester_email;
    /** @var mixed */
    public $status;
    /** @var string */
    public string $subject;
    /** @var string */
    public string $type;
    /** @var integer */
    public int $updated_at;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}