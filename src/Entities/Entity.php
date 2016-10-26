<?php

namespace Rinvex\Repository\Entities;

interface Entity
{
    /**
     * Get the field that's used as primary key when retrieving and storing entities of this type.
     *
     * @return string
     */
    public function getKey();
    
    /**
     * Get the value of the primary key field.
     *
     * @return integer|string
     */
    public function getKeyValue();
}
