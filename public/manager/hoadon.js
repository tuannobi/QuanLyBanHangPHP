$(document).ready(function(){
    $('#xuatfile').click(function(){
        var rowTableData=$('#table-data').html();
        var tableData="<!DOCTYPE html>\
        <html>\
        <head>\
        <style>\
        body {\
            font-family: DejaVu Sans;\
        }\
        table, th, td {\
          border: 1px solid black;\
        }\
        </style>\
        </head>\
        <body>\
        <h2>Danh sách hóa đơn</h2>\
        <p>Use the CSS border property to add a border to the table.</p>\
        <table style=\"width:100%\">\
          <tr>\
          <th>\
            <input type=\"checkbox\" id=\"checkall\" aria-label=\"Checkbox for following text input\">\
        </th>\
          <th >Mã hóa đơn</th>\
          <th >Khách hàng</th>\
          <th >Nhân viên</th>\
          <th >Tổng tiền</th>\
          <th >Số tiền giảm</th>\
          <th >Khách cần trả</th>\
          <th >Trạng thái</th>\
          <th >Hình thức thanh toán</th>\
          <th >Thời gian</th>\
          </tr>";
        tableData +=rowTableData;
        tableData +="\
        </table>\
        </body>\
        </html>\
        ";

        $.ajax({
            type: "GET",
            url: 'hoadon/setSession',
            data: {'tableData': tableData}, // gửi dữ liệu từ form qua controller

            success: function(res){
                window.location.href=('hoadon/xuatpdftatca');
            },
            error: function(res){
                alert("Xuất hiện lỗi: "+res);
            }

        });
    })

    $('#hoanhoadon').click(function(){
        if (($('input[type=checkbox]:checked').not('#checkall').length < 2) && ($('input[type=checkbox]:checked').not('#checkall').length >= 1)) {
            $('.checkbox-group').each(function() {
                if ($(this).prop("checked") == true) {
                    var ID = parseInt($(this).attr("id").match(/\d+/)); //lấy ra id của nút tick
                    $('#hoanhoadon-a').attr('href','http://localhost:82/DoAnWeb/public/admin/hoadon/hoanhoadon/'+ID);
                }
            });
        } else {
            $('#result').html('<div class="alert alert-danger">Vui lòng chọn 1 dòng để chỉnh sửa</div>');
        }
    });

    $('#inhoanhoadon').click(function(){
        if (($('input[type=checkbox]:checked').not('#checkall').length < 2) && ($('input[type=checkbox]:checked').not('#checkall').length >= 1)) {
            $('.checkbox-group').each(function() {
                if ($(this).prop("checked") == true) {
                    var ID = parseInt($(this).attr("id").match(/\d+/)); //lấy ra id của nút tick
                    $('#inhoanhoadon').attr('href','http://localhost:82/DoAnWeb/public/admin/hoadon/inhoanhoadon/'+ID);
                }
            });
        } else {
            $('#result').html('<div class="alert alert-danger">Vui lòng chọn 1 dòng để chỉnh sửa</div>');
        }
    });

})


