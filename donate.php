<?php include('includes/header.php'); ?>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                
                            </div> <!-- end row -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- container -->
            </div>
            <!-- content -->
        <?php include('includes/footer.php'); ?>
        <script>
            var file_name = '<?php echo basename(__FILE__, ".php"); ?>';
            function firstLetterToUpperCase(string){
                return string.charAt(0).toUpperCase() + string.slice(1);
            }
            if(file_name == 'index'){
                $('.page-title').text('Dashboard');    
            } else {
                $('.page-title').text(firstLetterToUpperCase(file_name)+' Blood');
            }
        </script>
    </body>
</html>