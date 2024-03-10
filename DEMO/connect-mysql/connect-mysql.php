<?php
$host = '127.0.0.1';
$db = 'person';
$username = 'root';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host; dbname = $db; charset = $charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
//b1 : ket noi csdl
try{
    $pdo = new PDO($dsn, $username, $options);
    echo "Connect to $db at $host successfully";
}catch (\PDOException $e){
    throw new \PDOException($e ->getMessage(), (int)$e->getCode());
}

// b2: xu ly data
function addEmployees($id, $name, $address, $salary){
    global $pdo;
    $sql = "Insert into employees(id, name, address, salary)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id', 'Name', 'address', 'salary']);
};

function getAllEmployees(){
    global $pdo;
    $stmt = $pdo->query("select * from employees");
    return $stmt->fetchAll();
};

function updateEmployees ($id, $name, $address, $salary)
{
    global $pdo;
    $sql = "Update employees set Name = :name, address=:address, salary = :salary where id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['Name'=>$name, 'address'=>$address, 'salary'=>$salary, 'id'=>$id]);

};

function deleteEmployees($id){
    global $pdo;
    $sql = "delete from employees where id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id'=>id]);


}

?>

