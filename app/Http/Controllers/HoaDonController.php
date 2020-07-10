<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HoaDonController extends Controller
{
    public function hienThiDanhSachHoaDon(){
        $list=DB::select('call hienThiDanhSachHoaDon()');
        return view('admin/hoadon',['list'=>$list]);
    }

    public function xuLyHoanDon(Request $request){
        DB::select('call xuLyHoanDonHang(?)',array($request->mahd));
        return redirect()->back()->with('success', 'Hoàn đơn thành công');
    }

    public function inHoanHoaDon(Request $request){
        $khachhang=DB::select('call layThongTinKhachHangTheoMaHoaDon(?)',array($request->mahd));
        $chitiethoadon=DB::select('call layThongTinChiTietHoaDon(?)',array($request->mahd));
        $hoadon=DB::select('call layThongTinHoaDon(?)',array($request->mahd));
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('m/d/Y h:i:s a', time());
        $output='
        <!DOCTYPE html>
<html>
<head>
<style>
#border{
    border-style: solid;
    border-width: 2px;
    }

#tongtien{
float:right;
    }
table, td, th {
  border: 1px solid black;
}
h2 {
    text-align:center;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th {
  height: 50px;
}
*{
	font-family: DejaVu Sans;
}
tr:nth-child(even) {background: #CCC}
tr:nth-child(odd) {background: #FFF}
th{
	background-color: #2E94DA;
}
</style>
</head>
<body>
<p>Ngày in: '.$date.'</p>
<h2>THỦ TỤC HOÀN TIỀN CHO ĐƠN HÀNG MÃ SỐ '. $request->mahd.' ĐÃ HOÀN TẤT</h2>
<h4> Thông tin khách hàng </h4>
<ul id="border">
  <li>Họ và tên khách hàng: '.$khachhang[0]->ho_ten.'</li>
  <li>Điện thoại: '.$khachhang[0]->dien_thoai.'</li>
  <li>Ngày nhận hàng: '.$hoadon[0]->time_thanh_toan.'</li>
  <li>Ngày hoàn tiền: '. $date.'</li>
  <li>Địa chỉ đã nhận hàng: '.$khachhang[0]->dia_chi.'</li>
</ul>
<br>
<h4> Thông tin chi tiết sản phẩm đã đặt</h4>
<table>
  <tr>
    <th>STT</th>
    <th>Tên sản phẩm</th>
    <th>Giá sản phẩm </th>
	<th>Số lượng</th>
    <th>Số tiền giảm</th>
    <th>Thành tiền</th>
  </tr>';
  for ($i=0;$i<count($chitiethoadon);$i++){
  $output .='<tr>
  <td>'.$i.'</td>
    <td>'.$chitiethoadon[$i]->ten_san_pham.'</td>
    <td>'.$chitiethoadon[$i]->gia_ban.'</td>
    <td>'.$chitiethoadon[$i]->so_luong.'</td>
	<td>'.number_format($chitiethoadon[$i]->so_tien_giam).'</td>
	<td>'.number_format($chitiethoadon[$i]->thanh_tien).'</td>
  </tr>';
  }
$output .='</table>';
$output .='
<br/>

<ul id="tongtien">
  <li>Tạm tính: '.$hoadon[0]->tong_tien_hang.'</li>
  <li>Tổng tiền giảm: '.$hoadon[0]->so_tien_giam.'</li>
  <li>Tổng số tiền hoàn lại: '.$hoadon[0]->khach_can_tra.'</li>
</ul>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<i> The Cosmo đã hoàn thành thủ tục hoàn tiền cho quý khách </i><br>
<i> Cảm ơn quý khách đã tin dùng sản phẩm của TheCosmo</i>
</body>
</html>';

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($output);
        return $pdf->stream();
    }
}
