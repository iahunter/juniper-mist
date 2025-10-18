<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model TicketComment
 */
class TicketComment extends BaseModel
{
    /** @var mixed */
    public $attachment_ids;
    /** @var mixed */
    public $attachments;
    /** @var string */
    public string $author;
    /** @var string */
    public string $comment;
    /** @var integer */
    public int $created_at;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}