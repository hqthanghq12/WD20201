<?php 
//  Hàm
// Hàm là gì?
// Hàm là 1 đoàn code hoặc 1 chức năng đã được 
// đóng gói nhằm tái sử dụng nhiều lần
// Hàm có mấy loại: 2 loại
// Hàm có trả về: là hàm có chứa return
// Hàm có trả về -> chia làm 2 loại 
// Hàm có trả về có tham số
// Công thức
// function ten_ham($thamso_1, $thamso_2, ..., $thamso_n){
// code
// return giá_trị/biến
// } 
// Ví dụ
// Hàm tính tổng 2 số a, b
function tinhTong($a, $b){
    return $a  + $b;
}
// Hàm có trả về không có tham số
// Công thức
// function ten_ham(){
// code
// return giá_trị/biến
// }
function tinhHieu(){
    return 5 - 3;
}
// Hàm không có trả về: là hàm không có return
// Hàm không có trả về -> chia làm 2 loại
// Hàm không có trả về có tham số
// Công thức
// function ten_ham($thamso_1, $thamso_2, ..., $thamso_n){
//     // code
// }
// Ví dụ
function tinhTich($a, $b){
    echo $a * $b;
}
// Hàm không có trả về không có tham số
//Công thức
// function ten_ham(){
//     // code
// }
function tinhThuong(){
    echo 6 / 3;
}
// Lưu ý: 
// -Nếu hàm không có tham số thì sẽ không
// Nhận được giá trị từ bên ngoài hàm truyền vào nên 
// Phải tự tạo giá trị
//- Hàm có bao nhiều tham số thì truyền vào bấy
// Nhiêu giá trị
// Gọi hàm: Khi sử dụng ta cần phải gọi hàm
// Hàm có trả về có tham số
// $tên_biến = tên_ham($thamso_1, $thamso_2, ..., $thamso_n);
// Ví dụ
$tinhTong = tinhTong(5, 6); // Có 2 tham số
// Hàm có trả về không có tham số
// Hàm có trả về có tham số
// $tên_biến = tên_ham();
$tinhHieu = tinhHieu();// Không có tham số
// Hàm không có trả về có tham số
// tên_hàm($thamso_1, $thamso_2, ..., $thamso_n);
tinhTich(5,6); // có 2 tham số
// Hàm không có trả về không có tham số
// tên_hàm();
tinhThuong();
// Luyện tập hàm
// Viết tính phương trình bậc 2 theo 4 loại hàm
// Viết phương trình có trả về và có tham số. Đếm trong mảng
// có bao nhiêu số chinh phương và số hoàn hảo và số nguyên tố 
?>