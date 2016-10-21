<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

?>
<h1>Computer Type Report</h1>

<p>
<table class="table table-hover table-striped table-bordered">
    <thead>
    <tr class="success">

        <th>Com Type ID</th>
        <th>Com Type Name</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach($data as $key => $info){ ?>
        <tr>
            <td><?php echo $info['com_type_id']; ?></td>
            <td><?php echo $info['com_type_name']; ?>
        </tr>
    <?php }?>

    </tbody>
</table>
</p>
