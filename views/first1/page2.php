<?php
/**
 * Created by IntelliJ IDEA.
 * User: tewapong
 * Date: 20/10/2559
 * Time: 13:58
 */

use yii\helpers\Html;

?>

<table class="table table-hover table-striped table-bordered">
    <thead>
    <tr class="success">

        <th>Com Type ID</th>
        <th>Com Type Name</th>
        <th></th>
    </tr>
    </thead>
    <tbody>

    <?php foreach($data as $key => $info){ ?>
        <tr>
            <td><?php echo $info['com_type_id']; ?></td>
            <td><?php echo $info['com_type_name']; ?>
            <?php echo '<td>'.Html::a('<span class="glyphicon glyphicon-list-alt"> Moredetail</span>', ['/first1/no_orm','tid'=>$info['com_type_id']]).'</td>';  ?>
        </tr>
    <?php }?>

    </tbody>
</table>
