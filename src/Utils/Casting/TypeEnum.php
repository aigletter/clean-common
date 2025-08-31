<?php

namespace Aigletter\CleanCommon\Utils\Casting;

enum TypeEnum: string
{
    case String = 'string';
    case Integer = 'integer';
    case Boolean = 'boolean';
    case Float =  'float';
    case Array = 'array';
    case Object = 'object';
    case Resource = 'resource';
    case Null = 'NULL';

    public static function fromValue(mixed $value): self {
        return match (gettype($value)) {
            'string' => self::String,
            'integer' => self::Integer,
            'boolean' => self::Boolean,
            'double' => self::Float,
            'array' => self::Array,
            'object' => self::Object,
            'resource' => self::Resource,
            'NULL' => self::Null,
            default => throw new \LogicException("Unknown type"),
        };
    }
}
