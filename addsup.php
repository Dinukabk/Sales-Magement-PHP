



<head></head>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>

<br>


<body>

    <div class="row-fluid">
        <div class="span12">

         

            <div class="container">

                <div class="row-fluid">
                    <div class="span2">
                        <!-- left nav -->
                        <ul class="nav nav-tabs nav-stacked">



                        </ul>
                        <!-- right nav -->
                    </div>
                    <div class="span10">

                    <div class="hero-unit-3">
                        <ul class="thumbnails">
                            <li class="span7">
                                <div class="thumbnail">
                                    <div class="alert alert-info"><i class="icon-plus-sign-alt icon-large"></i>&nbsp;Add Your suplier/div>

                                    <form class="form-horizontal" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="inputEmail">Name:</label>
                                            <div class="controls">
                                                <input type="text" name="un" id="inputEmail" placeholder="Class" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputPassword">Contact:</label>
                                            <div class="controls">
                                                <input type="password" name="p" id="inputPassword" placeholder="Subject" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputPassword">Mail:</label>
                                            <div class="controls">
                                                <input type="text" name="fn" id="inputPassword" placeholder="Time" required>
                                            </div>
                                        </div>
                                        
                                        <div class="control-group">
                                            <div class="controls">

                                                <button type="submit" name="save" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save Suplier</button>
                                            </div>
                                        </div>
                                    </form>

                                    <?php
                                    if (isset($_POST['save'])) {

                                        $un = $_POST['un'];
                                        $p = $_POST['p'];
                                        $fn = $_POST['fn'];
                                        
                                        
                                        mysqli_query($conn,"insert into  suplier (name,contact,mail) values ('$un','$p','$fn',)")or die(mysqli_error());
                                        echo('<script>location.href = "schedule.php"</script>');
                                    }
                                    ?>

                                </div>
                            </li>

                        </ul>
                        </div>



                    </div>
                </div>

            </div>
        </div>
    </div>




</body>
</html>