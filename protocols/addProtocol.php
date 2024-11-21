<?php
    require "protocolFun.php";
    
    var_dump($_FILES['pdf']);
    echo "<br>";
    var_dump($_FILES);

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_FILES['pdf'])){
        $file = $_FILES['pdf'];
        $name  = $_POST['name'];

        error_log("POST PDF: $name - ".$_FILES['pdf']['name']);
        $result = addPackagingProtocol(
            name: $name, file: $file
        );

       

    }

?>

    <div class="container">
        <main>
            <div class="py5" style="text-align: center;">
                <svg width="60" height="60" viewBox="0 0 16 16" fill="#5C73F2">
                    <path
                        d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003zM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z" />
                </svg>
                <h1>Protocol form</h1>
            </div>
            <div class="row-div">
                <div class="">
                    <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
                        <div class="row-form">
                            <div class="row-md-6">
                                <label for="height">Name of protocol</label>
                                <div class="input-group">
                                    <input name="name" id="name" type="text" step="0.01" maxlength="50">
                                </div>
                            </div>
                            <div class="row-md-6">
                                <label for="width">Filename</label>
                                <div class="input-group">
                                    <input type="file" name="pdf" id="pdf" type="text" step="0.01" required accept=".pdf">
                                </div>
                            </div>
                        <hr class="border-bottom" style="margin-top: 2rem; margin-bottom: 2rem;">
                        <button class="btn-primary" type="submit">Confirm creation</button>
                    </form>
                </div>
            </div>
        </main>
