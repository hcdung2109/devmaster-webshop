// ajaxSetup() là phương thức set giá trị mặc định cho tất cả các request ajax tiếp theo
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

/* Xóa một row */
function destroyCategory(id) {
    var result = confirm("Bạn có chắc chắn muốn xóa Danh mục ?");
    if (result) { // neu == ok
        $.ajax({
            url: base_url + '/admin/category/'+id,
            type: 'DELETE',
            data: {},
            dataType: "json",
            success: function (response) {
                if (response.status != 'undefined' && response.status == true) {
                    $('.item-'+id).closest('tr').remove();
                }
            },
            error: function (e) {
                console.log(e.message);
            }
        });
    }
}