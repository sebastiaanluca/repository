<?php

namespace Rinvex\Repository\Entities;

trait Timestamps
{
    /**
     * @var \Carbon\Carbon|null
     */
    public $created_at;
    
    /**
     * @var \Carbon\Carbon|null
     */
    public $updated_at;
}
