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
// class SinhVien{
//     // Thuộc tính
//     public $maSinhVien;
//     public $tenSinhVien;
//     public $ngaySinh;
//     public $gioiTinh;
//     // ...
//     // Phương thức
//     // Phương thức khởi tạo -> khác với các pt còn lại
//     // 1: PT khởi tạo được chạy ngay khi khởi tạo đối tượng
//     // Còn những pt khác thì phải gọi thì chạy
//     // 2: Nó là pt k trả về
//     public function __construct(){
//         echo '123';
//     }
//     // Ăn
//     // Nếu muốn gọi và sử dụng thuộc hoặc phương thức trong Clas
//     // Thì có công thức sau
//     // Thuộc tính: $this->tenthuoctinh
//     // Phương thức: $this->tenphuongthuc()
//     public function an(){
//         echo "Sinh viên {$this->tenSinhVien} đang ăn";
//     }
// }
// Khởi tạo đối tượng
// Công thức: $tên_biến = new tên_class();
// $sv = new SinhVien();
// Gán giá trị cho thuộc tính
// $sv->maSinhVien = "PH12345";
// $sv->tenSinhVien = "Nguyễn Văn A";
// Gọi phương thức -> Cũng yêu cầu như hàm đã học
//  $sv->an();
///////////////////////////
// Tính chất của OOP
// OOP có 4 tính chất: Đóng gọi, Kết thừa, Đa hình, Trừu tượng
// Đóng gói
// Tính gói cho phép chúng ta che dấu thông tin của đối tượng
// Và chỉ cho phép các phương thức được định nghĩa trong lớp
// Mới có thể truy câp  và sử dụng các thuộc tính và phương thức đó.
// Nó giúp che dấu và bảo vệ dữ liệu ở trong đôi tượng khỏi việc truy cập trực tiếp
// Từ bên ngoài
// Mục đích: Bảo vệ, Che dấu
// Thể hiện thông qua "Phạm vi truy cập"
// Phạm vi truy câp: public, protected, private
// public: Các thuộc tinh và phương thức công khai có thể truy cập ở bất cứ đâu bao gồm bên trong 
// Hoặc bên ngoài
// protected: Các thuộc tinh và phương thức được bảo vệ có thể truy cập ở cùng lớp hoặc trong 
// Những lớp kế thừa
// private:  Các thuộc tinh và phương thức riêng tư  có thể truy cập ở cùng lớp và không thể truy 
// Cập từ bên ngoài hoặc các lớp kế thừa
// Ví dụ
class Anmial{ // Lớp cha
    // Thuộc tính
    protected $ten;
    private $gioiTinh;
    public $loai;
    // Phương thức
    public function an(){
        echo "Đây là phương thức an của lớp Anmial";
    }
    private function diChuyen(){
        echo "Đây là phương thức diChuyen của lớp Anmial";
    }
}
// Khởi tạo đối tượng
$an = new Anmial();
// Truy cập thuộc tính
// $an->ten = "Mèo"; // Lỗi vì thuộc tính tên đang trạng thái là protected
// $an->gioiTinh = "Đực"; // Lỗi vì thuộc tính giới tính đang trạng thái là private
// Chỉ phạm vi truy cập cho phép thì mới có thề truy cập vào thuộc tính hoặc phương thức
// Kế thừa
// Kế thừa cho phép xây dựng các lớp mới dựa trên cơ sở của lớp hiện tại. Lớp mới (con) sẽ được kế
// Thừa 1 phần hoặc toàn bộ thuộc tinh và phương thức của lớp cha
// Lớp con
class Cat extends Anmial{
    public $mauLong;
    public function keu(){
        echo "Meo meo meo";
        // Gọi thuộc tinh của lớp cha
        echo $this->ten; // Được. Vì trạng thái của phạm vi truy cập đang là protected
        // echo $this->gioiTinh; // Không được. Vì trạng thái của phạm vi truy cập đang là private
        echo $this->loai; // Được. Vì trạng thái của phạm vi truy cập đang là public 
    }
}
?>