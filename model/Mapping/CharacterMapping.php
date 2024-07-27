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

    public function getBgCharId(): ?int
    {
        return $this->bg_char_id;
    }

    public function setBgCharId(?int $bg_char_id): void
    {
        if (!$this->verifyInt($bg_char_id)) throw new Exception('Invalid BG Character ID');
        $this->bg_char_id = $bg_char_id;
    }

    public function getBgCharOwnerId(): ?int
    {
        return $this->bg_char_owner_id;
    }

    public function setBgCharOwnerId(?int $bg_char_owner_id): void
    {
        if (!$this->verifyInt($bg_char_owner_id)) throw new Exception('Invalid BG Character Owner ID');
        $this->bg_char_owner_id = $bg_char_owner_id;
    }

    public function getBgCharExp(): ?int
    {
        return $this->bg_char_exp;
    }

    public function setBgCharExp(?int $bg_char_exp): void
    {
        if (!$this->verifyInt($bg_char_exp)) throw new Exception('Invalid BG Character Exp');
        $this->bg_char_exp = $bg_char_exp;
    }

    public function getBgCharHp(): ?int
    {
        return $this->bg_char_hp;
    }

    public function setBgCharHp(?int $bg_char_hp): void
    {
        if(!$this->verifyInt($bg_char_hp)) throw new Exception('Invalid BG Character Hp');
        $this->bg_char_hp = $bg_char_hp;
    }

    public function getBgCharAtt(): ?int
    {
        return $this->bg_char_att;
    }

    public function setBgCharAtt(?int $bg_char_att): void
    {
        if(!$this->verifyInt($bg_char_att)) throw new Exception('Invalid BG Character Att');
        $this->bg_char_att = $bg_char_att;
    }

    public function getBgCharDef(): ?int
    {
        return $this->bg_char_def;
    }

    public function setBgCharDef(?int $bg_char_def): void
    {
        if(!$this->verifyInt($bg_char_def)) throw new Exception('Invalid BG Character Def');
        $this->bg_char_def = $bg_char_def;
    }



} // end class
