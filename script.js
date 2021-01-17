$(document).ready(function(){
    $('#upimg').click(function () {
        //Lấy ra files
        var file_data = $('#image').prop('files')[0];
        //lấy ra kiểu file
          var type = file_data.type;
        // Xét kiểu file được upload
        var match = ["image/jpeg", "image/png", "image/jpg",];
        //kiểm tra kiểu file
        if (type == match[0] || type == match[1] || type == match[2]) {
            //khởi tạo đối tượng form data
            var form_data = new FormData();
            //thêm files vào trong form data
            form_data.append('file', file_data);
            //sử dụng ajax post
            $.ajax({
                url: 'http://localhost/btl/admin/doiavatar.php', // gửi đến file upload.php 
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function (res) {
                    if(res.substr(0,3)=='img'){
                        $('#img').attr('src','../'+res+'');
                        
                    }else{
                        alert("Lỗi")
                    }
                    $('#image').val('');
                    }
            
        }) }
    });
   
})