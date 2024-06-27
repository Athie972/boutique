<?php

namespace App\Enums;

enum User_type: string
{
    case Admin = 'admin';
    case Default = 'user';
}