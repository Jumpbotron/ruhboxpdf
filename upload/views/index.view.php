<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0. minimum-scale=1.0">
        <title>upload - ruhbox</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      	<link rel="stylesheet" type="text/css" href="../css/upload.css">
    </head>
    <body>
        <div class="wrap">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">

                  <h4 class="title">Upload a PDF - ruhbox</h4>
                  <br>
                  <br>
                    <tr>
                        <td><input type="text" name="title" placeholder="Title:"></td>
                    </tr>

      <tr>
                        <td><textarea name="description" placeholder="Description(optional):"></textarea></td>
                    </tr>


                    <tr>
                        <td colspan="1"><input type="file" name="file"></td>
                  </tr>
                   <br>
                    <br>
                   <?php if(!empty($error)):?>
                     <br>
                   <div class="alert error">
                   	<?php echo $error; ?>
                   </div>
                 <?php elseif(!empty($success)):?>
                   <div class="alert success">
                     <?php echo  $success ; ?>
                  <a href="<?php echo htmlspecialchars($destiny); ?>">Watch it</a>
              </div>
                   <?php  endif ?>

                    <tr>
                        <td><input type="submit" class="btn" value="upload!" name="upload"></td>

                    </tr>




            </form>
        </div>
    </body>
</html>
