<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files | HTML && CSS && PHP && jQuery | RAMHSYAMUpload Files </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <h2 class="text-center bg-danger text-light p-3">PHP Learning - HTML & CSS & PHP & jQuery</h2>
    
 
    <div class="container-fluid cover">
        <div class="index col-lg-3" id="index">
            <div class="item bg-danger type-btn text-white" id="header-type">Select Subject</div>
            <div class="item bg-select" id="p-btn">Physics</div>
            <div class="item bg-select" id="c-btn">Chemistry</div>
            <div class="item bg-select" id="b-btn">Biology</div>
            <div class="item bg-select" id="m-btn">Maths</div>
            <div class="item bg-select" id="e-btn">English</div>
            <div class="item bg-select" id="s-btn">SSt.</div>
            <div class="item control-manual mt-2">
                <h5>Form Control</h5>
                <button class="btn btn-md btn-outline-primary mb-2" id="f">Foundation</button>
                <button class="btn btn-md btn-outline-primary mb-2" id="t">Tim</button>
                <button class="btn btn-md btn-outline-primary mb-2" id="r">Race</button>
                <button class="btn btn-md btn-outline-primary mb-2" id="e">Exercise</button>
            </div>
        </div>
        <div class="box col-lg-9">
            <div class="menu">
                <h1 class="bg-primary text-light text-center p-2" style="width: 100%;">UPLOAD -> ALLEN STUFF <button type="button" id="upload-bar" class="btn btn-lg btn-outline-light p-2">Home</button></h1>
                <h3 class="msg my-3"><span id='success-msg1' class="text-danger">Error !! -> </span><span id='success-msg2' class="text-primary">Please Select the Menu From Index.</span></h3>
                <div class="container col-lg-5 my-3">
                    <form class="p-3" id="load-form">
                        <div class="input">
                            <label for="name" class="label-manual mb-3">PDF Name : </label>
                            <input type="text" class="form-control mb-4" id="name" name="name" required>
                        </div>
                        <div class="input">
                            <label for="file" class="label-manual mb-3">Browse File : </label>
                            <input type="file" class="form-control mb-4" id="file" name="file" required>
                        </div>
                        <div class="input">
                            <input type="hidden" id="subject" name="subject" class="form-control">
                        </div>
                        <div class="input">
                            <input type="hidden" id="type" name="type" class="form-control">
                        </div>
                        <button type="submit" id="upload-file" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <span id="select-sub"></span>
    <span id="select-type"></span>
        

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script>
      $(document).ready(function(){

        function btn_clear(){
                $('#f').attr('class', 'btn btn-md btn-outline-primary mb-2');
                $('#t').attr('class', 'btn btn-md btn-outline-primary mb-2');
                $('#r').attr('class', 'btn btn-md btn-outline-primary mb-2');
                $('#e').attr('class', 'btn btn-md btn-outline-primary mb-2');
            }

        function sub_clear(){
                $('#p-btn').attr('class', 'item bg-select');
                $('#c-btn').attr('class', 'item bg-select');
                $('#b-btn').attr('class', 'item bg-select');
                $('#m-btn').attr('class', 'item bg-select');
                $('#e-btn').attr('class', 'item bg-select');
                $('#s-btn').attr('class', 'item bg-select');
        }

        $('#p-btn').click(function(){
            sub_clear();
            $('#p-btn').attr('class', 'item sub-select');
            $('#subject').val('p');
        });

        $('#c-btn').click(function(){
            sub_clear();
            $('#c-btn').attr('class', 'item sub-select');
            $('#subject').val('c');
        });

        $('#b-btn').click(function(){
            sub_clear();
            $('#b-btn').attr('class', 'item sub-select');
            $('#subject').val('b');
        });

        $('#m-btn').click(function(){
            sub_clear();
            $('#m-btn').attr('class', 'item sub-select');
            $('#subject').val('m');
        });

        $('#e-btn').click(function(){
            sub_clear();
            $('#e-btn').attr('class', 'item sub-select');
            $('#subject').val('e');
        });

        $('#s-btn').click(function(){
            sub_clear();
            $('#s-btn').attr('class', 'item sub-select');
            $('#subject').val('s');
        });

        $('#f').click(function(){
            btn_clear();
            $('#f').attr('class', 'btn btn-md btn-primary mb-2');
            $('#type').val('f');
        });

        $('#t').click(function(){
            btn_clear();
            $('#t').attr('class', 'btn btn-md btn-primary mb-2');
            $('#type').val('t');
        });

        $('#r').click(function(){
            btn_clear();
            $('#r').attr('class', 'btn btn-md btn-primary mb-2');
            $('#type').val('r');
        });

        $('#e').click(function(){
            btn_clear();
            $('#e').attr('class', 'btn btn-md btn-primary mb-2');
            $('#type').val('e');
        });
        

          $('#load-form').on('submit', function(e){
              e.preventDefault();

            var sub_c = $('#subject').val();
            var type_c = $('#type').val();
            var name_c = $('#name').val();
            var file_c = $('#file').val();

            if(sub_c != '' && type_c != '' && name_c != '' && file_c != ''){
              
              var formData = new FormData(this);

              $.ajax({
                url: 'load.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data){
                    $('#name').val('');
                    $('#file').val('');
                    if(data == 'true'){
                        $('#success-msg1').attr('class', 'text-success');
                        $('#success-msg2').attr('class', 'text-primary');
                        $('#success-msg1').html("<strong>Success !! &nbsp;</strong>");
                        $('#success-msg2').text("Your file uploaded.");
                        btn_clear();
                        sub_clear();
                        $('#subject').val('');
                        $('#type').val('');
                        console.log("Uploaded Successfully");
                        $('.msg').show();
                        
                    }else{
                        console.log("Cound not upload data");
                    }
                    
                }
              });
            }else{
                $('.msg').show();
            }
          });

          $('#upload-bar').click(function(){
            window.location.href='home.php';
          });
      });
    </script>
</body>
</html>