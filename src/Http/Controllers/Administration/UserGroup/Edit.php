<?php

namespace LaravelEnso\Core\Http\Controllers\Administration\UserGroup;

use Illuminate\Routing\Controller;
use LaravelEnso\Core\Forms\Builders\UserGroupForm;
use LaravelEnso\Core\Models\UserGroup;

class Edit extends Controller
{
    public function __invoke(UserGroup $userGroup, UserGroupForm $form)
    {
        return ['form' => $form->edit($userGroup)];
    }
}
