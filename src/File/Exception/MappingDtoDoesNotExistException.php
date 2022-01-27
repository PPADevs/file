<?php
namespace File\Exception;

use ppa-devs\Ddd\Domain\Exception\DomainException;

class MappingDtoDoesNotExistException extends DomainException
{
    private $defaultMessage = 'Mapping DTO does not exist.';
    
    public function __construct($message=null)
    {
        parent::__construct((null === $message) ? $this->defaultMessage : $message, []);
    }
}

