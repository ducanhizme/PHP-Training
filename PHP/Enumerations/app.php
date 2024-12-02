<?php

enum Status :string{
    case PENDING = 'pending';
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case DELETED = 'deleted';

    public static function toArray(): array{
        return [
            self::ACTIVE->value,
            self::PENDING->value,
            self::INACTIVE->value,
            self::DELETED->value
        ];
    }
}

$enums = Status::toArray();
var_dump($enums);
