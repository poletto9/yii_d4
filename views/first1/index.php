<?php
/* @var $this yii\web\View */
?>
<h1><?php echo $str ?></h1>

<table class="table table-hover table-striped">
    <thead>
    <tr class="success">
        <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach($person as $key => $info){ ?>
        <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $info['fname']; ?></td>
            <td><?php echo $info['lname']; ?></td>
            <td><?php echo $info['email']; ?></td>
        </tr>
    <?php }?>

    </tbody>
</table>