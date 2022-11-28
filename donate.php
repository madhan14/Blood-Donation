<?php include('includes/header.php'); ?>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <form>
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3">General Details</h4>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label for="simpleinput" class="form-label">First Name</label>
                                                        <input type="text" id="firstName" class="form-control" />
                                                        <div class="invalid-feedback">Please enter your First Name.</div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label for="simpleinput" class="form-label">Last Name</label>
                                                        <input type="text" id="lastName" class="form-control" />
                                                        <div class="invalid-feedback">Please enter your Last Name.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label for="simpleinput" class="form-label">Gender</label>
                                                        <div class="mt-2 gender">
                                                            <div class="form-check form-check-inline">
                                                                <input type="radio" id="male" value="m" name="gender" class="form-check-input">
                                                                <label class="form-check-label" for="male">Male</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input type="radio" id="female" value="f" name="gender" class="form-check-input">
                                                                <label class="form-check-label" for="female">Female</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input type="radio" id="third" value="t" name="gender" class="form-check-input">
                                                                <label class="form-check-label" for="third">Third gender</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input type="radio" id="nts" value="n" name="gender" class="form-check-input">
                                                                <label class="form-check-label" for="nts">prefer not to say</label>
                                                            </div>
                                                        </div>
                                                        <div class="invalid-feedback">Please Select your Gender.</div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label class="form-label">Date Of Birth</label>
                                                        <input type="text" class="form-control date" id="birthdatepicker" data-toggle="date-picker" data-single-date-picker="true" />
                                                        <div class="invalid-feedback">Please Select your DOB.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="simpleinput" class="form-label">Blood Group</label>
                                                    <select class="form-control select2" id="bloodGrop" data-toggle="select2">
                                                        <option></option>
                                                        <option value="O+">O <sup>+</sup></option>
                                                        <option value="O-">O <sup>-</sup></option>
                                                        <option value="A+">A <sup>+</sup></option>
                                                        <option value="A-">A <sup>-</sup></option>
                                                        <option value="B+">B<sup>+</sup></option>
                                                        <option value="B-">B<sup>-</sup></option>
                                                        <option value="AB+">AB <sup>+</sup></option>
                                                        <option value="AB-">AB <sup>-</sup></option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please select your Blood group.</div>
                                                </div>
                                                <div class="col">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3">Medical Details</h4>~
                                            <!-- <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label for="simpleinput" class="form-label">In the past 7 days, have you taken asprin, painkillers or anti-inflammatory drugs?</label>
                                                        <div class="mt-2">
                                                            <div class="form-check form-check-inline">
                                                                <input type="radio" id="yes" value="y" name="bb" class="form-check-input">
                                                                <label class="form-check-label" for="yes">Yes</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input type="radio" id="no" value="n" name="bb" class="form-check-input">
                                                                <label class="form-check-label" for="no">No</label>
                                                            </div>
                                                        </div>
                                                        <div class="invalid-feedback">Please enter your First Name.</div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label for="simpleinput" class="form-label">In the last four hours, have you had a meal or snack?</label>
                                                        <div class="mt-2">
                                                            <div class="form-check form-check-inline">
                                                                <input type="radio" id="yes" value="y" name="fs" class="form-check-input">
                                                                <label class="form-check-label" for="yes">Yes</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input type="radio" id="no" value="n" name="fs" class="form-check-input">
                                                                <label class="form-check-label" for="no">No</label>
                                                            </div>
                                                        </div>
                                                        <div class="invalid-feedback">Please enter your First Name.</div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </form>
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