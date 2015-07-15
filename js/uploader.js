function upload(form) {
            $form = $('#upload-form');
            fd = new FormData($form[0]);
            $.ajax(
                'http://[サーバーのURL]/uploader.php',
                {
                type: 'post',
                processData: false,
                contentType: false,
                data: fd,
                dataType: "json",
                success: function(data) {
                    alert( data.message );
                    console.log(data);
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert( "ERROR" );
                    alert( textStatus );
                    alert( errorThrown );
                }
            });
            return false;
        }