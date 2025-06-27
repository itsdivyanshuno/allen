<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | HTML && CSS && PHP && jQuery | RAMHSYAM</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <h2 class="text-center bg-danger text-light p-3">PHP Learning - HTML & CSS & PHP & jQuery</h2>
    
 
    <div class="container-fluid cover">
        <div class="index col-lg-3" id="index">
            <div class="item bg-danger type-btn text-white"><span id="header-type">Select Subject</span><span id="selected-subject"></span><span id="selected-form"></span></div>
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
                <h1 class="bg-primary text-light text-center p-2" style="width: 100%;">ALLEN STUFF MATERIAL <button type="button" id="upload-bar" class="btn btn-lg btn-outline-light p-2">Upload</button></h1>
                <div class="tview container"></div>
            </div>
        </div>
    </div>
    <span id="select-sub"></span>
    <span id="select-type"></span>
        

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script>
        $(document).ready(function(){

            function displayTable(){
                var sub = $('#select-sub').text();
                var type = $('#select-type').text();
                var table_name = sub + type;
                $.ajax({
                    url : "table_view.php",
                    type : "POST",
                    data : {tb_name: table_name},
                    success : function(data){
                        $('.tview').html(data);
                    }
                });
            }

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

            function refresh(){
                var type = $('#select-type').text();
                var sub = $('#select-sub').text();
                if(type != '' && sub != ''){
                    displayTable();
                }
            }

            $('#p-btn').click(function(){
                sub_clear();
                $('#p-btn').attr('class', 'item sub-select');
                $('#select-sub').text("p");
                $('#header-type').text("Selected : ");
                $('#selected-subject').text("Physics");
                refresh();
            });

            $('#c-btn').click(function(){
                sub_clear();
                $('#c-btn').attr('class', 'item sub-select');
                $('#select-sub').text("c");
                $('#header-type').text("Selected : ");
                $('#selected-subject').text("Chemistry");
                refresh();
            });

            $('#b-btn').click(function(){
                sub_clear();
                $('#b-btn').attr('class', 'item sub-select');
                $('#select-sub').text("b");
                $('#header-type').text("Selected : ");
                $('#selected-subject').text("Biology");
                refresh();
            });

            $('#m-btn').click(function(){
                sub_clear();
                $('#m-btn').attr('class', 'item sub-select');
                $('#select-sub').text("m");
                $('#header-type').text("Selected : ");
                $('#selected-subject').text("Maths");
                refresh();
            });

            $('#e-btn').click(function(){
                sub_clear();
                $('#e-btn').attr('class', 'item sub-select');
                $('#select-sub').text("e");
                $('#header-type').text("Selected : ");
                $('#selected-subject').text("English");
                refresh();
            });

            $('#s-btn').click(function(){
                sub_clear();
                $('#s-btn').attr('class', 'item sub-select');
                $('#select-sub').text("s");
                $('#header-type').text("Selected : ");
                $('#selected-subject').text("SSt.");
                refresh();
            });
            

            $('#f').click(function(){
                btn_clear();
                $('#f').attr('class', 'btn btn-md btn-primary mb-2');
                $('#select-type').text("f");
                $('#header-type').text("Selected : ");
                $('#selected-form').text(" + Foundation");
                refresh();
            });

            $('#t').click(function(){
                btn_clear();
                $('#t').attr('class', 'btn btn-md btn-primary mb-2');
                $('#select-type').text("t");
                $('#header-type').text("Selected : ");
                $('#selected-form').text(" + Tim");
                refresh();
            });

            $('#r').click(function(){
                btn_clear();
                $('#r').attr('class', 'btn btn-md btn-primary mb-2');
                $('#select-type').text("r");
                $('#header-type').text("Selected : ");
                $('#selected-form').text(" + Race");
                refresh();
            });

            $('#e').click(function(){
                btn_clear();
                $('#e').attr('class', 'btn btn-md btn-primary mb-2');
                $('#select-type').text("e");
                $('#header-type').text("Selected : ");
                $('#selected-form').text(" + Exercise");
                refresh();
            });

            $('#upload-bar').click(function(){
                var pass = prompt("Enter your password: ");
                if(pass == 'admin'){
                    window.location.href='upload.php';
                }else{
                    alert("Password Incorrect !!");
                }
            });

        });
    </script>
</body>
</html>