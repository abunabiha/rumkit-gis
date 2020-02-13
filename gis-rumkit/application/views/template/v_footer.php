                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?= base_url() ?>template/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?= base_url() ?>/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?= base_url() ?>/js/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
        <script src="<?= base_url() ?>/js/dataTables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>/js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?= base_url() ?>/js/startmin.js"></script>

 <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>
        <script>
                function setToForm(latitude,longitude)
                {
                       $('input[name="latitude"]').val(latitude);
                       $('input[name="longitude"]').val(longitude);
                }
        </script>
    </body>
</html>