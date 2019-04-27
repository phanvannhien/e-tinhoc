<script src="{{ url('admin/dist/js/nestable/jquery.nestable.js') }}"></script>
<script>
    $(document).ready(function () {

        $('body').on('click','.admin-product-category .btn-delete', function (e) {
            e.preventDefault();
            var that = this;
            swal({
                title: 'Bạn chắc chắn muốn xoá?',
                text: "Bạn không thể phục hồi",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Tiếp tục xoá!'
            }, function(){
                $.ajax({
                    dataType: 'json',
                    url: $(that).attr('href'),
                    method: 'DELETE',
                    success: function(response){
                        if( response.success ){
                            window.location.href = '{{ route('categories.index') }}' ;
                        }else{
                            swal("Thông báo!", response.msg , "error");
                        }
                    }
                });
            });
        });


        $('#nestable').nestable({
            group: 1,
            maxDepth: 5,
            dragClass: 'drag-able'
        });

        $('#save-menu-order').on('click', function (e) {
            e.preventDefault();
            var data = $('#nestable').nestable('serialize');
            console.log(data);
            $.ajax({
                url: '{{ route("ajax.category.ordering") }}',
                dataType: 'json',
                type: 'post',
                data: { cats : data },
                beforeSend: function(){

                },
                success: function( res ){
                    if( res.success ){
                        swal({
                            title: "@lang('app.success')",
                            text: "@lang('app.success')",
                            type: "success"
                        });
                    }

                }

            });
        });


    });


</script>