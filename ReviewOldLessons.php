<?php 
// Ôn tập 
// 1. Biến trong PHP
// - Biến số là gì?
// Biến số là nơi dùng để lưu trữ giá trị. Ở tại 1 thời điểm
// thì biến số chỉ chứa 1 giá trị duy nhất.
// - Cú pháp khai báo biến số trong PHP
// $ten_bien = gia_tri;
// $ten_bien; // Khai báo biến số
// Ví dụ:
// $soNguyen = 10;
// 2. Hằng số trong PHP
// Cú pháp khai báo hằng số trong PHP
// define('TEN_HANG_SO', gia_tri);
// const TEN_HANG_SO = gia_tri;
// Ví dụ:
// define('PI', 3.14);
// const API = 'https://api.zingmp3.vn';
// 3. Câu điều kiện trong PHP
// - Câu lệnh if (Nếu)
// Ví dụ: 
// Nếu điểm => 5 thì in ra "Pass" 
// Nếu điểm < 5 thi in ra "Fail"
// $diemSo = 5;
// if ($diemSo>= 5){
//     echo "Pass";
// }
// if ($diemSo < 5){
//     echo "Fail";
// }
// => công thức
// if (điều_kiện){
//     // Thực thi 1 hành động nào đó
// }
// Nếu điều kiện đúng thi thực thi 1 hành động nào đó
// Nếu điều kiện sai thì không thực thi hành động đó
// - Câu lệnh if else
// Ví dụ:
// Nếu điểm => 5 thì in ra "Pass"  ngược lại in ra "Fail"
// if ($diemSo >= 5){
//     echo "Pass";
// }else{
//     echo "Fail";
// }
// => công thức
// if (điều_kiện){
//     // Hành động 1
// }else{
   // Hành động 2
// }
// Nếu điều kiện đúng thì thực thi hành động 1
// Nếu điều kiện sai thì thực thi hành động 2
// - Câu lệnh if else if else
// Ví dụ:
// Nếu điểm >= 8 thì in ra "Giỏi"
// Nếu điểm >= 6 và < 8 thì in ra "Khá"
 // Nếu điểm < 6 thì in ra "Yếu"
// $diemSo = 7.5;
// if ($diemSo >= 8){
//     echo "Giỏi";
// } elseif ($diemSo >= 6){
//     echo "Khá";
// } else{
//     echo "Yếu";
// }
// => công thức
// if (điều_kiện_1){
    // Hành động 1
// }elseif (điều_kiện_2){
    // Hành động 2
    //...
// } else {
    // Hành động n
// }
// Nếu điều kiện 1 đúng thì thực thi hành động 1
// Nếu điều kiện 1 sai sau đó sẽ xét điều kiện 2 
// Nếu điều kiện 2 đúng thì thực thi hành động 2
// Lần lượt cho đến điều kiện n
// Nếu điều kiện n mà sai thì thực thi hành động trong else
// - Câu lệnh switch case
// Ví dụ:
// Nếu $so = 1 thì in ra "Một"
// Nếu $so = 2 thì in ra "Hai"
// Nếu $so = 3 thì in ra "Ba"
// $so = 2;
// switch ($so) {
//     case 1:
//         echo "Một";
//         break;
//     case 2:
//         echo "Hai";
//         break;
//     case 3:
//         echo "Ba";
//         break;
//     default:
//         echo "Không xác định";
//         break;
// }
// 4. Vòng lặp trong PHP
// - Vòng lặp for
// công thức:
// for (khởi_tạo; điều_kiện_kết_thúc; bước_nhảy){
    // Thực thi 1 hành động nào đó
// }
// - Vòng lặp while
// công thức:
// while (điều_kiện){
    // Thực thi 1 hành động nào đó
// }
// - Vòng lặp do while
// công thức:
// do{
    // Thực thi 1 hành động nào đó
// }while(điều_kiện);
// Bài tập: 
// 1. Giải phương trình bậc 2: ax^2 + bx + c = d
// 2. Kiểm số vừa nhập vào có phải là số nguyên tố không?
// 5. Mảng trong PHP (Tập 1)
// Mảng là gì?
// Mảng là 1 biến đặc biệt dùng để lưu trữ nhiều giá trị
// Mảng có mấy loại?
// - Mảng tuần tự: Key sẽ tự tạo ra và không cần phải khai báo
// (Key bắt đầu từ 0 đến n - 1. 
// Với n là tổng số phần tử trong mảng) 
// - Mảng kết hợp: Key sẽ do người dùng tự tạo ra
// - Mảng đa chiều: Mảng chứa mảng
//////////
// - Mảng tuần tự:
// Cú pháp khai báo mảng tuần tự trong PHP
// $ten_mang = [gia_tri_1, gia_tri_2, gia_tri_3, ...];
// Ví dụ:
// $mangSoNguyen = [2,5,6,8,7,9];
// Hiện thị mảng
// echo "<pre>";
// var_dump($mangSoNguyen);
// Lấy giá trị trong mảng
// công thức: $ten_mang[key];
// echo $mangSoNguyen[2]; // 6
// Thêm giá tri vào mảng
// Cú pháp: $ten_mang[] = gia_tri; // Thêm vào cuối mảng
// $mangSoNguyen[] = 10;
// echo "<pre>";
// var_dump($mangSoNguyen);
// Cập nhập giá trị trong mảng
// Cú pháp: $ten_mang[key] = gia_tri;
// $mangSoNguyen[2] = 20;
// echo "<pre>";
// var_dump($mangSoNguyen);// 6 -> 20
// Xóa giá trị trong mảng
// Cú pháp: unset($ten_mang[key]);
// unset($mangSoNguyen[6]); // 10
// echo "<pre>";
// var_dump($mangSoNguyen);
// Duyệt mảng
// for hoặc foreach
// Công thức: 
// foreach ($ten_mang as $key => $value){
    // Thực thi 1 hành động nào đó
// }
// foreach($mangSoNguyen as $key => $value){
//     echo $value;
// }
// Bài tập: Khai báo 1 mảng tuần tự có 10 phần tử
// Yêu cầu:
// Hiển thị mảng
// Lấy ngẫu nhiên gia trị của 5 phần tử
// Thêm 1 phần tử vào cuối mảng
// Duyệt mảng bằng foreach và in ra các số chẵn
// Duyệt mảng bằng foreach và in các số nguyên tố
// Thời gian: 20 phút
// Hết
// Mảng kết hợp
// Cú pháp khai báo mảng kết hợp trong PHP
// $ten_mang = [
//     key_1 => gia_tri_1,
//     key_2 => gia_tri_2,
//     key_3 => gia_tri_3,
//     ...
// ];
// Ví dụ:
// $food = [
//     "ansang"=> "Cháo lòng",
//     "antrua" => "Cơm gà",
//     "antoi" => "Lẩu ếch",
//     "andem" => "Chân gà nướng"
// ];
// // Hiern thị mảng
// echo "<pre>";
// var_dump($food);
// // Lấy giá trị trong mảng
// // Công thức: $ten_mang[key];
// echo $food["ansang"];// Cháo lòng
// // Thêm giá trị vào mảng
// // Cú pháp: $ten_mang[key] = gia_tri; // cuối mảng
// $food["angansang"] = "Phở gánh";
// echo "<pre>";
// var_dump($food);
// // Cập nhập giá trị trong mảng
// // Cú pháp: $ten_mang[key] = gia_tri;
// $food["ansang"] = "Bún riêu";
// echo "<pre>";
// var_dump($food);
// // Xóa giá trị trong mảng   
// // Cú pháp: unset($ten_mang[key]);
// unset($food["ansang"]);
// echo "<pre>";
// var_dump($food);
// // Duyệt mảng
// // foreach
// foreach ($food as $key1 => $value1){
//     echo $value1;
// }
// Mảng đa chiều
// Cú pháp khai báo mảng đa chiều trong PHP
// $ten_mang = [
//     key_1 => [
//         key_1_1 => gia_tri_1_1, 
//         key_1_2 => gia_tri_1_2,
//         ... 
//     ],
//     key_2 => [
//         key_2_1 => gia_tri_2_1,
//         key_2_2 => gia_tri_2_2,
//         ...
//     ],
//     ...
// ];
// Ví dụ:
$food = [
    "ansang"=> [
        "mon1" => "Cháo lòng",
        "mon2" => "Bún riêu",
        "mon3" => "Phở gánh"
    ],
    "antrua" => [
        "mon1" => "Cơm gà",
        "mon2" => "Bún bò",
        "mon3" => "Bún chả"
    ],
    "antoi" => [
        "mon1" => "Lẩu ếch",
        "mon2" => "Lẩu thái",
        "mon3" => "Lẩu hải sản"
    ],
    "andem" => [
        "mon1" => "Chân gà nướng",
        "mon2" => "Gà nướng",
        "mon3" => "Bò nướng"
    ]
];
// Hiển thị mảng
echo "<pre>";
// var_dump($food);
// Lấy giá trị trong mảng
// Công thức: $ten_mang[key1][key2];
// var_dump($food['ansang']['mon1']);  // cháo lòng
// Thêm giá trị vào mảng
// Cú pháp: $ten_mang[key1][key2] = gia_tri;
// $food['andem']['mon4'] = "Bánh mì dân tổ";
// echo "<pre>";
// var_dump($food);
// xóa giá trị trong mảng
// Cú pháp: unset($ten_mang[key1][key2]);
// unset($food['andem']['mon4']);
// echo "<pre>";
// var_dump($food);
// Duyệt mảng
// foreach
// foreach ($food as $key1 => $value1){
//     // var_dump($value1);
//     foreach ($value1 as $key2 => $value2){
//         echo $value2."<br>";
//     } 
// }
function
?>