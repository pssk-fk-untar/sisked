<?php

namespace App\Identity\Enums;

enum UserRole: string
{
    case Student = 'student';
    case Lecturer = 'lecturer';
    case Admin = 'admin';

    /**
     * Get the human-readable label for the role.
     */
    public function label(): string
    {
        return match ($this) {
            self::Student => 'Student',
            self::Lecturer => 'Lecturer',
            self::Admin => 'Admin',
        };
    }
}
