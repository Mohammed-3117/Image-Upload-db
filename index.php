<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="style.css" /> -->
</head>
<style>
    #content{
        margin:20px auto;
        align-items: center;
        justify-content: center;
        border: 2px solid aqua;
        width: 50%;
    }
    form{
        width: 50%;
        margin:20px auto;
    }
    input{
        border: 1px solid orange;
        padding: 20px;
    }
</style>
<body>
    <div id="content">
        <h1>Upload Image</h1>
            <form action="next.php" method="POST"enctype="multipart/form-data" >
                <div  class="form-group">
                    <input type="file" name="uploadfile"><br><br>
                </div>
                <div class="form-group">
                    <button type="submit" name="upload" class="btn btn-primary">Upload</button>
                </div>
            </form>
    </div>
    <div>
       
    </div>

    
</body>
</html>