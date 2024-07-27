<?php

// so very easy using PHPStorm
namespace model\Mapping;

use model\Abstract\AbstractMapping;
use model\Trait\TraitTestInt;
use model\Trait\TraitTestString;
use model\Trait\TraitDateTime;
use model\Trait\TraitLaundryRoom;
use DateTime;
use Exception;

class UserMapping extends AbstractMapping {

use TraitTestString, TraitTestInt, TraitDateTime, TraitLaundryRoom;

protected ?int $battle_user_id;
protected ?string $battle_user_login;
protected ?string $battle_user_pass;
protected ?string $battle_user_name;
protected ?string $battle_user_email;
protected ?int $battle_user_permission;
    protected null|string|DateTime $battle_user_created;

    public function getObjectUserId(): ?int
    {
        return $this->battle_user_id;
    }

    public function setObjectUserId(?int $battle_user_id): void
    {
        if(!$this->verifyInt($battle_user_id)) throw new Exception("User id must be a positive integer");
        $battle_user_id = $this->intClean($battle_user_id);
        $this->battle_user_id = $battle_user_id;
    }

    public function getObjectUserLogin(): ?string
    {

        return $this->battle_user_login;
    }

    public function setObjectUserLogin(?string $battle_user_login): void
    {

        if(!$this->verifyString($battle_user_login)) throw new Exception("Login cannot be empty");
        $battle_user_login = $this->standardClean($battle_user_login);
        $this->battle_user_login = $battle_user_login;
    }

    public function getObjectUserPass(): ?string
    {
        return $this->battle_user_pass;
    }

    public function setObjectUserPass(?string $battle_user_pass): void
    {
        if(!$this->verifyString($battle_user_pass)) throw new Exception("Password cannot be empty");
        $this->battle_user_pass = $battle_user_pass;
    }

    public function getObjectUserName(): ?string
    {
        return $this->battle_user_name;
    }

    public function setObjectUserName(?string $battle_user_name): void
    {
        if(intval($this->verifyInt($battle_user_name))) throw new Exception("Username cannot be a number");
        if(!$this->verifyString($battle_user_name)) throw new Exception("Username cannot be empty");
        $battle_user_name = $this->standardClean($battle_user_name);
        $this->battle_user_name = $battle_user_name;
    }

    public function getObjectUserEmail(): ?string
    {
        return $this->battle_user_email;
    }

    public function setObjectUserEmail(?string $battle_user_email): void
    {
        if(!$this->verifyString($battle_user_email)) throw new Exception("Email cannot be empty");
        $battle_user_email = $this->emailClean($battle_user_email);
        $this->battle_user_email = $battle_user_email;
    }

    public function getObjectUserPermission(): ?int
    {
        return $this->battle_user_permission;
    }

    public function setObjectUserPermission(?int $battle_user_permission): void
    {
        if(!$this->verifyInt($battle_user_permission)) throw new Exception("User permission must be a positive integer");
        $battle_user_permission = $this->intClean($battle_user_permission);
        $this->battle_user_permission = $battle_user_permission;
    }

    public function getObjectUserCreated(): DateTime|string|null
    {
        return $this->battle_user_created;
    }

    public function setObjectUserCreated(DateTime|string|null $battle_user_created): void
    {
        if ($battle_user_created === null) {
            $battle_user_created = new DateTime();
        }
        if(!$this->verifyString($battle_user_created)) throw new Exception("Date cannot be empty");
        $this->formatDateTime($battle_user_created, 'battle_user_created');
        $this->battle_user_created = $battle_user_created;
    }



} // end class