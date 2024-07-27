<?php

namespace model\Mapping;

use model\Abstract\AbstractMapping;
use model\Trait\TraitTestInt;
use model\Trait\TraitTestString;
use model\Trait\TraitDateTime;
use model\Trait\TraitLaundryRoom;
use DateTime;
use Exception;
class CharacterMapping extends AbstractMapping{
    use TraitTestInt, TraitTestString, TraitDateTime, TraitLaundryRoom;

protected ?int $bg_char_id;
protected ?int $bg_char_owner_id;
protected ?int $bg_char_exp;
protected ?int $bg_char_hp;
protected ?int $bg_char_att;
protected ?int $bg_char_def;



} // end class
