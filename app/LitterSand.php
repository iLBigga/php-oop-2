<?php

trait LitterSand {

    public function setScented($scented)
    {
        if (is_string($scented)) {
            $this->scented = $scented;
        }
    }
}