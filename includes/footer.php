<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <script>document.write(new Date().getFullYear())</script> © 
            </div>
            <div class="col-md-6">
                <div class="text-md-end footer-links d-none d-md-block">
                    <a href="javascript: void(0);">About</a>
                    <a href="javascript: void(0);">Support</a>
                    <a href="javascript: void(0);">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->
</div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->

        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- third party js -->
        <!-- <script src="assets/js/vendor/apexcharts.min.js"></script> -->
        <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->
        <script>
            function time(){
                $('#dash-daterange').val();
                var d = new Date();
                date = d.getDate();
                month = d.getMonth();
                year = d.getFullYear();
                hours = d.getHours();
                if(hours > 12){
                    hours = hours-12;
                    if(hours < 10){
                        hours = '0'+hours;
                    }
                }
                minutes = d.getMinutes();
                if(minutes < 10){
                    minutes = '0'+minutes;
                }
                seconds = d.getSeconds();
                if(seconds < 10){
                    seconds = '0'+seconds;
                }
                if(d.getHours() > 12){
                    $('#dash-daterange').val(date+'-'+month+'-'+year+' '+hours+':'+minutes+':'+seconds +' P.M');
                } else {
                    $('#dash-daterange').val(date+'-'+month+'-'+year+' '+hours+':'+minutes+':'+seconds +' A.M');
                }
            }
            time();
            var updatePeriodSec = 1;
            setInterval(time, 1e3*updatePeriodSec)
        </script>
        <!-- demo app -->
        <!-- <script src="assets/js/pages/demo.dashboard.js"></script> -->
        <!-- end demo js-->