<?php

namespace Rinvex\Repository\Entities;

trait SoftDeletes
{
    /**
     * @var \Carbon\Carbon|null
     */
    public $deleted_at;
}
