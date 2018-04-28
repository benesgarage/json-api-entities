<?php

namespace JsonAPI\V1\Entity;

class Links
{
    const SELF_FIELD    = 'self';
    const RELATED_FIELD = 'related';
    const FIRST_FIELD   = 'first';
    const LAST_FIELD    = 'last';
    const PREV_FIELD    = 'prev';
    const NEXT_FIELD    = 'next';

    public $self;

    public $related;

    public $first;

    public $last;

    public $prev;

    public $next;
}