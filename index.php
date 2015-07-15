<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
	    $(function() {
	        $('#upload-form-file').on("change", function() {
	            $form = $('#upload-form');
	            fd = new FormData($form[0]);
	            $.ajax(
	                {
	                type: 'post',
	                url: 'uploader.php',
	                processData: false,
	                contentType: false,
	                data: fd,
	                dataType: "text",
	                success: function(data) {
	                    alert( data.message );
	                    console.log(data);      
	                },
	                error: function(XMLHttpRequest, textStatus, errorThrown) {
	                	console.log(data); 
	                }
	            });
	            $('#upload-form-file').val('');
	            return false;
	            
	        });
	    });
	</script>
    <title>フォトアップローダー</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	  <h1>フォトアップローダー</h1>
	  <form id="upload-form" method="post" enctype="multipart/form-data" onSubmit="return upload(this);">
	  	<input id="upload-form-file" style="display: none" name="userfile" size="27" type="file" accept="image/*;capture=camera" onchange="$('#fake_input_file').val($(this).val())">
	  	<button type="button" class="btn btn-primary btn-lg" value="写真を撮る！" onClick="$('#upload-form-file').click();">
	  		<i class="glyphicon glyphicon-camera"></i>写真を撮る！
	  	</button >
	  </form>
  </body>
</html>