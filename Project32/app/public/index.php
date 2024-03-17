<?php
require_once ('../config/config.php');
require_once APP_ROOT.('/app/config/DBConnection.php');
require_once APP_ROOT.'/app/service/DepartmentService.php';
require_once APP_ROOT.'/app/models/Department.php';

//echo APP_ROOT;
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'department';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';


if($controller == 'department'){
    require_once APP_ROOT.'/app/controllers/DepartmentController.php';
    $departmentController = new DepartmentController();
    if($action == 'index'){
        $departmentController->index();
    }
    if($action == 'indexAdd'){
        $departmentController->indexAdd();

    }if($action == 'add'){
        $departmentController->add();

    }
    if($action == 'edit'){
        $id = isset($_GET['id']);
        echo $id;
        $departmentController->edit($id);
    }
    if($action == 'delete'){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        $departmentController->delete(15);

    }
}

else{
    echo 'khong ton tai';
}

//switch ($controller){
//    case 'department':
//        require_once APP_ROOT.'/app/controllers/DepartmentController.php';
//        break;
//    default:
//         require_once APP_ROOT.'/app/controllers/DepartmentController.php';
//         break;
//}

$dep = new DepartmentService();


