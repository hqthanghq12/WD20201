<!-- ASM 1: Yêu cầu xây dựng giao diện cho những trang sau
 - Admin (dạng bảng)
 1: Danh sản phẩm 
 - Hiện thi
 - Thêm
 - Sửa
 2: Sản phẩm
 - Người dùng
 1: Trang chủ
 Có thể tham khảo hoặc sự các theme của bootstrap
 Nhưng cần tách thành 2 file 1 là layout 2 nội dung
 -> ASM 1 lấy: Lab 1234 (Có điểm cộng) và ASM1
-->
 <?php 
// $view = 'views/admin/category/add.php';
// include 'views/admin/layout.php';
// Tesst truy vấn
include 'Models/Product.php';
$product = new Product();
// var_dump($product->getAllDataProduct()); // All data
// var_dump($product->getIdDataProduct(1)); // Id data = 1
// Thêm
// $product->addDataProduct(null, 'Iphone 12', 20000000, 
// 'iphone12.jpg', 10, 1);
// var_dump($product->getAllDataProduct());
// Sửa
// $product->editDataProduct('Iphone 12 Pro', 30000000, 
// 'iphone12pro.jpg', 10,1,1);
// var_dump($product->getAllDataProduct());
 // Xóa
 $product->deleteDataProduct(1);
 var_dump($product->getAllDataProduct());
 ?>