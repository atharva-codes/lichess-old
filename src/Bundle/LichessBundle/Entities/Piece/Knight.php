<?php

namespace Bundle\LichessBundle\Entities\Piece;
use Bundle\LichessBundle\Entities\Piece;

class Knight extends Piece
{
    public function getClass()
    {
        return 'Knight';
    }

    protected function getBasicTargetSquares()
    {
        return array();
    }
}
