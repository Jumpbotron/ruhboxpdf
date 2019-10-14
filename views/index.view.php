<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0. minimum-scale=1.0">
        <title>ruhbox</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      	<link rel="stylesheet" type="text/css" href="css/index.css">
    </head>
    <body>
        <div class="header" align="left">
  ruh-box / beta
        </div>

        <div class="content">
          <?php foreach($contents as $content): ?>
        <?php $destiny =  'upload/' . $content['destiny']; ?>
        <?php echo '<a href="' .  $destiny . '">' . $content['title'] . '</a>';  ?>
          <?php endforeach; ?>
        </div>
    </body>
</html>
