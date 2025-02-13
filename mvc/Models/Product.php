<?php 
include 'Model.php';
class Product extends Model{
    // Kết nối CSDL
    // Thuộc tính kết nối CSDL
    public $connection;
    // Thuộc tính chứa tên bảng
    public $table = 'products';
    // Phương thức khởi tạo
    public function __construct(){
        $this->connection = new Model();
    }
    // Phương thức truy vấn dữ liệu
    // Lấy tất cả
    public function getAllDataProduct(){
        // Truy vấn phải đúng
        $sql = "SELECT * FROM {$this->table}";
        // luôn luôn sau $sql là gọi đến hàm chứa SQL
        $this->connection->setSQL($sql);
        // Thực thi câu lệnh
        return $this->connection->all(); // Lấy nhiều bản ghi
    }
    // Lấy id -> nhận id từ bên ngoài -> tham số
    public function getIdDataProduct($id){
        // Truy vấn phải đúng
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        // luôn luôn sau $sql là gọi đến hàm chứa SQL
        $this->connection->setSQL($sql);
        // Thực thi câu lệnh
        return $this->connection->first([$id]); // Lấy nhiều bản ghi
    }
    // Thêm mới
    public function addDataProduct($id, $name, $price, $image, $quantity, $status){
        $sql = "INSERT INTO {$this->table} VALUES (?,?,?,?,?,?)";
        $this->connection->setSQL($sql);
        return $this->connection->execute([$id, $name, $price, $image, $quantity, $status]);
    }
    // Sửa
    public function editDataProduct( $name, $price, $image, $quantity, $status, $id){
        $sql = "UPDATE {$this->table} SET `name`= ?,`price`= ?,
        `image`= ?,`quantity`= ?,`status`= ? WHERE `id`= ?";
        $this->connection->setSQL($sql);
        return $this->connection->execute([$name, $price, $image, $quantity, $status, $id]);
    }
    // Xóa
    public function deleteDataProduct($id){
        $sql = "DELETE FROM {$this->table} WHERE `id` = ?";
        $this->connection->setSQL($sql);
        return $this->connection->execute([$id]);
    }
}
?>