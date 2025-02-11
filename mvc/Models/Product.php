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
    // Lấy id
}
?>