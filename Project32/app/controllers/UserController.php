<?php
require_once APP_ROOT.'/app/service/UserService.php';
class UserController
{
    public function index(){
        // gọi dữ liệu từ DepartmentService
        $userService = new UserService();
        $users = $userService->getALLUsers();

        // check thu data dc lay ra chua

        include APP_ROOT . '/app/views/user/setting-profile.blade.php';

    }

}
