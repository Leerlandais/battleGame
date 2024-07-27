<?php

namespace model\Manager;

use model\Mapping\CharacterMapping;
use model\MyPDO;
use model\Trait\TraitLaundryRoom;
use model\Trait\TraitTestInt;
use model\Trait\TraitTestString;
class CharacterManager
{
use TraitLaundryRoom, TraitTestString, TraitTestInt;

    private MyPDO $db;

    public function __construct(OurPDO $pdo)
    {
        $this->db = $pdo;
    }
}