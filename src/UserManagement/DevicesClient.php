<?php

namespace LiveStyled\UserManagement;

use LiveStyled\Client;
use LiveStyled\CrudClient;

class DevicesClient extends Client implements CrudClient
{
    protected function getPath()
    {
        return '/v4/user_management/devices';
    }
}
