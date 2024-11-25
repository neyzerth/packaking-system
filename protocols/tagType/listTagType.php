<?php
    require_once "../../config.php";
    require "tagTypeFun.php";
    $tagTypes = getTagTypes();
?>
<main class="tables">
    <div class="background">
        <?php 
        $link="?a=add";
        include HEADER;
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>
                        <span>Code</span>
                        <span class="column-order"></span>
                    </th>
                    <th>
                        <span>Description</span>
                        <span class="column-order"></span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tagTypes as $tagType): ?>
                <tr>
                    <td><?php echo $tagType['code']; ?></td>
                    <td><?php echo $tagType['description']; ?></td>
                    <?php if(validateUser("ADMIN")):?>
                    <td>
                        <a href="?a=edit&code=<?php echo $tagType['code'];?>">Edit</a>
                    </td>
                    <?php endif;?>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>
                        <span>Code</span>
                        <span class="column-order"></span>
                    </th>
                    <th>
                        <span>Description</span>
                        <span class="column-order"></span>
                    </th>
                </tr>
            </tfoot>
        </table>
        <?php include FOOTER ?>
    </div>
</main>
