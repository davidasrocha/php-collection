<?php

namespace Collection\Interfaces;

use Collection\Interfaces\ListType;
use Collection\Interfaces\QueryableType;

interface CastType {

    /**
     * @return ListType
     */
    public function toListType();

    /**
     * @return QueryableType
     */
    public function toQueryableType();

}