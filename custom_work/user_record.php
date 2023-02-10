<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
</head>

<body>
    <div class="container">
        <h1>Insert User Record</h1>

        <div class="row">
            <div class="col-md-12">
                <form id="insert_form" action="ajaxupload.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">NAME</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                            required />
                    </div>
                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"
                            required />
                    </div>
                    <input id="uploadImage" type="file" accept="image/*" name="image" />
                    <div id="preview"><img src="filed.png" /></div><br>
                    <input class="btn btn-primary" type="submit" value="Upload" id="upload">
                </form>

            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function(e) {
    $("#insert_form").on('submit', (function(e) {
        e.preventDefault();
        $.ajax({
            url: "ajax_api.php",
            type: "POST",
            data: $('#insert_form').serialize(),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#upload').val("Inserting").attr('disabled','disabled');
                // $('#upload').attr('disabled','disabled');

                Swal.fire(
                    'Good job!',
                    'Record has been added successfully!',
                    'success'
                )
            },
            success: function(data) {        
                if (data == 'invalid') {
                    $("#err").html("Invalid File !").fadeIn();
                } else {
                    $("#insert_form")[0].reset();
                    // $("#upload").html(data).fadeIn();
                }
            },
            error: function(e) {
                $("#err").html(e).fadeIn();
            }
        });
    }));
});
</script>

</html>