$('#submit_change_pass').on('click', function() {
    // Gán các giá trị trong form tạo note vào các biến
    $old_pass = $('#old_pass').val();
    $new_pass = $('#new_pass').val();
    $re_new_pass = $('#re_new_pass').val();
 
    // Nếu một trong các biến này rỗng
    if ($old_pass == '' || $old_pass == '' || $re_new_pass == '')
    {
        $('#formChangePass .alert').removeClass('hidden');
        $('#formChangePass .alert').html('Vui lòng điền đầy đủ thông tin bên trên.');
    }
    // Ngược lại
    else
    {
        // Thực thi gửi dữ liệu bằng Ajax
        $.ajax({
            url : 'change-pass.php', // Đường dẫn file nhận dữ liệu
            type : 'POST', // Phương thức gửi dữ liệu
            // Các dữ liệu
            data : {
                old_pass : $old_pass,
                new_pass : $new_pass,
                re_new_pass : $re_new_pass
            // Thực thi khi gửi dữ liệu thành công
            }, success : function(data) {
                $('#formChangePass .alert').removeClass('hidden');
                $('#formChangePass .alert').html(data);
            }
        });
    }
});