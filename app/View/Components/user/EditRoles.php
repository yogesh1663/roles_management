<?php

namespace App\View\Components\user;

use App\Models\Role;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EditRoles extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public $roles;
    public function __construct($id)
    {
        $this->id = $id;
        return $this->roles = Role::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user.edit-roles');
    }
}
