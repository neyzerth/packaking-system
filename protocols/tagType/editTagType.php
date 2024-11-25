<?php
    if(!validateUser("ADMIN","SUPER")){
        header("Location: /tagType/");//verificar desde donde es
        exit;
    }
    require "tagTypeFun.php";

    if (isset($_GET['code'])) {
        $code = $_GET['code'];
        $tag_type = getTagTypeByCode($code);
        if (!$tag_type) {
            echo "Tag not found";
            exit;
        }
    }

    if ($_SERVER['REQUEST_METHOD']=='POST') {

        $code = $_POST['code'];
        $description = $_POST['description'];

        $result = updateTagType(
            code: $code, description:$description
        );

        if ($result) {
            echo "<div class='div-msg' id='success-msg'><span class='msg'>Tag added successfully</span></div>";
        } else {
            echo "<div class='div-msg' id='error-msg'><span class='msg'>Error adding tag</span></div>";
        }
    }
?>
<script src="tagTypeForm.js"></script>

<main class="forms">
    
    <div class="background">
        <form class="form" action="" method="post" autocomplete="off">
            <header class="header">
                <img src="<?php  echo SVG . "icon.svg" ?>">
            </header>
            <h2>Tag type</h2>
            <div class="rows">
                <div class="row-sm-3">
                    <h4 for="code">Code</h4>
                    <div class="inputs">
                        <input name="code" id="code" type="text" required value="<?php echo $tag_type['code']; ?>"  maxlength="5">
                    </div>
                </div>

                <div class="row-md-5">
                    <h4 for="destination">Description</h4>
                    <div class="inputs">
                        <input name="description" id="description" type="text" placeholder="Heavy" required value="<?php echo $tag_type['description']; ?>"  maxlength="50">
                    </div>
                </div>
            </div>
            <hr>
            <footer class="footer">
                <button class="btn-primary" type="submit">Update</button>
            </footer>
        </form>
    </div>
</main>
<script>
        setTimeout(() => {
            const successMsg = document.getElementById('success-msg');
            const errorMsg = document.getElementById('error-msg');
            if (successMsg) successMsg.style.display = 'none';
            if (errorMsg) errorMsg.style.display = 'none';
        }, 3000);
    </script>