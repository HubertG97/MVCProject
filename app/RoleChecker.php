<?php


namespace App;


class RoleChecker
{
    /**
     * @param User $user
     * @param string $role
     * @return bool
     */
    public function check(User $user, string $role)
    {
        // Admin has everything
        if ($user->hasRole(UserRole::ROLE_ADMIN)) {
            return true;
        }
        else if($user->hasRole(UserRole::ROLE_EDITOR)) {
            $editorRoles = UserRole::getAllowedRoles(UserRole::ROLE_EDITOR);

            if (in_array($role, $editorRoles)) {
                return true;
            }
        }

        return $user->hasRole($role);
    }
}
