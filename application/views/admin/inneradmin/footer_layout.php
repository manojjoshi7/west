</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    
	<script src="<?php echo base_url('assets/admin/js/jquery.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/admin/js/bootstrap.min.js');?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('assets/admin/js/plugins/morris/raphael.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/js/plugins/morris/morris.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/js/plugins/morris/morris-data.js');?>"></script>
<script>
 
 var doconfirm=function(username)
               {
                job=confirm("Are you sure to delete "+username+" informetion permanently?");
				
                if(job!=true)
                {
                 return false;
                }
                }
</script>
</body>

</html>