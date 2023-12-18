<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>sampleTableEscapePHP</title>
</head>
<body>
    <?php
    $name = "Roman Groblicki";
    $address = "13 Leeds Place";
    // switch 'out' of PHP temporarily
    ?>
    <table style="border: 1px solid black">
        <tr>
            <td>name</td>
            <td><?php print $name; ?></td>
        </tr>
        <tr>
            <td>address</td>
            <td><?php print $address; ?></td>
        </tr>
    </table>
    <?php
  //I'm back in PHP
    ?>
</body>
</html>
