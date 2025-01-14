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
// Hàm không có trả không có tham số
//Công thức
// function ten_ham(){
//     // code
// }
// Lưu ý: Nếu hàm không có tham số thì sẽ không
// Nhận được giá trị từ bên ngoài hàm truyền vào nên 
// Phải tự tạo giá trị
?>