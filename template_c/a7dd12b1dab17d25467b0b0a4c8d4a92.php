<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div><?php echo $this->value['data']; ?><?php echo $this->value['data']; ?><?php echo $this->value['data']; ?><?php echo $this->value['data']; ?><?php echo $this->value['data']; ?><?php echo $this->value['data2']; ?></div>

      <?php foreach ((array) $this->value['myArray'] as $k => $foo){ ?>
        <li><?php echo $this->value['foo']; ?></li>
       <?php } ?>
          
    </body>
</html>
