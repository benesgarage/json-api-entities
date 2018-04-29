<?php

namespace JsonAPI\V1\Entity;

class Links
{
    const SELF_FIELD    = 'self';
    const RELATED_FIELD = 'related';
    const ABOUT_FIELD   = 'about';
    const FIRST_FIELD   = 'first';
    const LAST_FIELD    = 'last';
    const PREV_FIELD    = 'prev';
    const NEXT_FIELD    = 'next';

    public $self;

    public $related;

    public $about;

    public $first;

    public $last;

    public $prev;

    public $next;
}