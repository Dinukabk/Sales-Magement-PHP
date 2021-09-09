<?php
$conn = mysqli_connect('localhost','root','','regis')or die(mysqli_error());
?>
<body>
    <style type="text/css">
    
    table, th, td {
  border: 1px solid black;
}
table {
    width: 100%;
     border-collapse: collapse;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
<br>
<br>

<br>


<br>

<br>

<br>

<br>
<br>



            <div class="span9">
                <a href="addsup.php" class="btn btn-success"><i class="icon-plus-sign icon-large"></i>&nbsp;Add SUPLIER</a>
             
                <br></br>
                <div class="hero-unit-3">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;Class Table</strong>
                        </div>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>contact</th>
                                <th>Mail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($conn,"select * from suplier  ") or die(mysqli_error());
                            while ($row = mysqli_fetch_array($query)) {
                                $id = $row['id'];
                                ?>
                                <tr class="odd gradeX">
                                    <!-- script -->
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    
                                    $('#d<?php echo $id; ?>').tooltip('show')
                                    $('#d<?php echo $id; ?>').tooltip('hide')
                                });
                            </script>
                            <!-- end script -->
                         
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    
                                    $('#v<?php echo $id; ?>').tooltip('show')
                                    $('#v<?php echo $id; ?>').tooltip('hide')
                                });
                            </script>
                            <!-- end script -->

                           
                            <td><?php echo $row['id']; ?></td> 

                            <td><?php echo $row['name']; ?></td> 
                            <td><?php echo $row['contact']; ?></td> 
                            <td><?php echo $row['mail']; ?></td> 
                           
                             <td width="50">
                                <a rel="tooltip"  title="Delete Subject" id="d<?php echo $id; ?>" href="#id<?php echo $id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;</a>
                               
                            </td>
                            <!-- user delete modal -->
                            <div id="id<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-header">
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Class?</div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                                    <a href="delete_sup.php<?php echo '?id=' . $class_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                                </div>
                            </div>
                            <!-- end delete modal -->

                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <!-- end slider -->
                </div>
            </div>

        </div>
    
    </div>
</div>
</div>






</body>
</html>


