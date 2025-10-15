<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Ticket extends BaseModel
{
    public string $case_number;
    public $comments;
    public int $created_at;
    public $id;
    public string $requester;
    public string $requester_email;
    public $status;
    public string $subject;
    public string $type;
    public int $updated_at;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}