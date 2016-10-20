<?php
/**
 * Created by IntelliJ IDEA.
 * User: tewapong
 * Date: 20/10/2559
 * Time: 15:13
 */
?>


<table class="table table-hover table-striped table-bordered">
    <thead>
    <tr class="success">
        <th>#</th>
        <th>Brand</th>
        <th>Problem</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach($data as $key => $info){ ?>
        <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $info['brand']; ?></td>
            <td><?php echo $info['problem']; ?></td>
        </tr>
    <?php }?>

    </tbody>
</table>


