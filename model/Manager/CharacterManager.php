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

}