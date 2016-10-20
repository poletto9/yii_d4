<?php
/**
 * Created by IntelliJ IDEA.
 * User: tewapong
 * Date: 20/10/2559
 * Time: 11:16
 */
?>

<table class="table table-hover table-striped table-bordered">
    <thead>
    <tr class="success">
        <th>#</th>
        <th>Brand</th>
        <th>Assets Code</th>
        <th>CPU Type</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach($com as $key => $info){ ?>
        <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $info['brand']; ?></td>
            <td><?php echo $info['asset_code']; ?></td>
            <td><?php echo $info['cpu_type']; ?></td>
        </tr>
    <?php }?>

    </tbody>
</table>