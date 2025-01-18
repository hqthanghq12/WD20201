<?php 
// Lập trình hướng đối tượng
// Tìm hiểu về đối tượng
// Đối tượng là gì?
// Là sự vật hoặc sự việc cần nghiên cứu
// Ví dụ: 
// Máy tính, Bàn, Ghế, con cá,...
// Cơn bão, Không khí
// Thành phần của đối tượng
// Chia 2 phần cơ bản
// - Đặc điểm: Là các dữ liệu của đối tượng -> Biến -> Thuộc tính
// ví dụ: CRUSH
// + tên, ngày sinh, địa chỉ, số điện thoại, ...
// - Hành động: Là nhưng hành đông mà đối tượng -> Hàm -> Phương thức
// có thể thực hiện
// + từ chối, đi cùng người khác, ...
// Lớp (class)
// Lớp là gì?
// Lớp là khuôn mẫu giúp tạo ra nhiều đối tượng chung thuộc tính phương thức
// Ví dụ
class SinhVien{
    // Thuộc tính
    public $maSinhVien;
    public $tenSinhVien;
    public $ngaySinh;
    public $gioiTinh;
    // ...
    // Phương thức
    // Phương thức khởi tạo -> khác với các pt còn lại
    // 1: PT khởi tạo được chạy ngay khi khởi tạo đối tượng
    // Còn những pt khác thì phải gọi thì chạy
    // 2: Nó là pt k trả về
    public function __construct(){
        echo '123';
    }
    // Ăn
    // Nếu muốn gọi và sử dụng thuộc hoặc phương thức trong Clas
    // Thì có công thức sau
    // Thuộc tính: $this->tenthuoctinh
    // Phương thức: $this->tenphuongthuc()
    public function an(){
        echo "Sinh viên {$this->tenSinhVien} đang ăn";
    }
}
// Khởi tạo đối tượng
// Công thức: $tên_biến = new tên_class();
$sv = new SinhVien();
// Gán giá trị cho thuộc tính
// $sv->maSinhVien = "PH12345";
// $sv->tenSinhVien = "Nguyễn Văn A";
// Gọi phương thức -> Cũng yêu cầu như hàm đã học
//  $sv->an();
?>