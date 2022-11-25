<?php include('includes/header.php'); ?>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card widget-flat">
                                            <a href="javascript:redirect('donate_blood')" class="card-body">
                                                <div class="float-end">
                                                    <i class="mdi mdi-blood-bag widget-icon color-red"><sup>+</sup></i>
                                                </div>
                                                <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Donate Blood</h5>
                                                <h3 class="mt-3 mb-3">
                                                    <span>O<sup>+</sup>,</span>
                                                    <span>O<sup>-</sup>,</span>
                                                    <span>A<sup>+</sup>,</span>
                                                    <span>A<sup>-</sup>,</span>
                                                    <span>B<sup>+</sup>,</span>
                                                    <span>B<sup>-</sup>,</span>
                                                    <span>AB<sup>+</sup>,</span>
                                                    <span>AB<sup>-</sup></span>
                                                </h3>
                                                <p class="mb-0 text-muted">
                                                    <!-- <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span> -->
                                                    <span class="text-nowrap">Donate Blood to save lives</span>  
                                                </p>
                                            </a> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-sm-6">
                                        <div class="card widget-flat">
                                            <a href="javascript:redirect('need_blood')" class="card-body">
                                                <div class="float-end">
                                                <i class="mdi mdi-blood-bag widget-icon color-red"><sup>-</sup></i>
                                                </div>
                                                <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Need Blood</h5>
                                                <h3 class="mt-3 mb-3">
                                                    <span>O<sup>+</sup>,</span>
                                                    <span>O<sup>-</sup>,</span>
                                                    <span>A<sup>+</sup>,</span>
                                                    <span>A<sup>-</sup>,</span>
                                                    <span>B<sup>+</sup>,</span>
                                                    <span>B<sup>-</sup>,</span>
                                                    <span>AB<sup>+</sup>,</span>
                                                    <span>AB<sup>-</sup></span>
                                                </h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-nowrap">Need Blood to save lives</span>
                                                </p>
                                            </a> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
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
            console.log('<?php echo basename(__FILE__, ".php"); ?>')
            if('<?php echo basename(__FILE__, ".php"); ?>' == 'index'){
                $('.page-title').text('Dashboard');    
            } else {
                $('.page-title').text('<?php echo basename(__FILE__, ".php"); ?>');
            }
            function redirect(type){
                if(type == "donate_blood"){
                    window.location = 'donate.php';
                }
                if(type == "need_blood"){
                    window.location = 'https://google.com'
                }
            }
        </script>
    </body>
</html>