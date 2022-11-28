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
                                            <h4 class="card-title mb-3">Medical Details</h4>
                                            <div class="row mb-2">
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label ml--2">Are you feeling well and in good health today?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="ghealth-yes" value="y" name="ghealth" class="form-check-input">
                                                            <label class="form-check-label" for="ghealth-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="ghealth-no" value="n" name="ghealth" class="form-check-input">
                                                            <label class="form-check-label" for="ghealth-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <h5>Are you involved in any activity/occupation which may endanger you or anyone else should you become light-headed or faint, such as:</h5>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">Driving a public transport or heavy-duty vehicle, working on scaffolding or working with dangerous machinery?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="driving-yes" value="y" name="driving" class="form-check-input">
                                                            <label class="form-check-label" for="driving-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="driving-no" value="n" name="driving" class="form-check-input">
                                                            <label class="form-check-label" for="driving-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">Piloting an aircraft, sky diving, deep sea diving or mountaineering?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="diving-yes" value="y" name="diving" class="form-check-input">
                                                            <label class="form-check-label" for="diving-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="diving-no" value="n" name="diving" class="form-check-input">
                                                            <label class="form-check-label" for="diving-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">In the last four hours, have you had a meal or snack?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="ms-yes" value="y" name="ms" class="form-check-input">
                                                            <label class="form-check-label" for="ms-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="ms-no" value="n" name="ms" class="form-check-input">
                                                            <label class="form-check-label" for="ms-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <h5>In the past 7 days</h5>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">Have you taken painkiller or anti-inflammatory drugs?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="drugs-yes" value="y" name="drugs" class="form-check-input">
                                                            <label class="form-check-label" for="drugs-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="drugs-no" value="n" name="drugs" class="form-check-input">
                                                            <label class="form-check-label" for="drugs-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">Have you been to the dentist?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="dentist-yes" value="y" name="dentist" class="form-check-input">
                                                            <label class="form-check-label" for="dentist-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="dentist-no" value="n" name="dentist" class="form-check-input">
                                                            <label class="form-check-label" for="dentist-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2 female_donors">
                                                <h5>Female Donors</h5>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">In the past six months have you been pregnant?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="pregnant-yes" value="y" name="pregnant" class="form-check-input">
                                                            <label class="form-check-label" for="pregnant-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="pregnant-no" value="n" name="pregnant" class="form-check-input">
                                                            <label class="form-check-label" for="pregnant-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">At present are you pregnant or breastfeeding?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="bf-yes" value="y" name="bf" class="form-check-input">
                                                            <label class="form-check-label" for="bf-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="bf-no" value="n" name="bf" class="form-check-input">
                                                            <label class="form-check-label" for="bf-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <h5>In the past 6 months have you</h5>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">Had accidental exposure to someone else's blood or body fluid?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="abf-yes" value="y" name="abf" class="form-check-input">
                                                            <label class="form-check-label" for="abf-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="abf-no" value="n" name="abf" class="form-check-input">
                                                            <label class="form-check-label" for="abf-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">Had a tattoo or permanent make-up applied?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="tato-yes" value="y" name="tato" class="form-check-input">
                                                            <label class="form-check-label" for="tato-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="tato-no" value="n" name="tato" class="form-check-input">
                                                            <label class="form-check-label" for="tato-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">Had an injection, vaccination or inoculation?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="vac-yes" value="y" name="vac" class="form-check-input">
                                                            <label class="form-check-label" for="vac-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="vac-no" value="n" name="vac" class="form-check-input">
                                                            <label class="form-check-label" for="vac-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">Taken any pills or medicine ordered by doctor?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="pmd-yes" value="y" name="pmd" class="form-check-input">
                                                            <label class="form-check-label" for="pmd-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="pmd-no" value="n" name="pmd" class="form-check-input">
                                                            <label class="form-check-label" for="pmd-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">Received any medical or traditional treatment?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="treat-yes" value="y" name="treat" class="form-check-input">
                                                            <label class="form-check-label" for="treat-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="treat-no" value="n" name="treat" class="form-check-input">
                                                            <label class="form-check-label" for="treat-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">Been admitted to hospital?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="adm-yes" value="y" name="adm" class="form-check-input">
                                                            <label class="form-check-label" for="adm-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="adm-no" value="n" name="adm" class="form-check-input">
                                                            <label class="form-check-label" for="adm-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <h5>Do you have or have you ever had</h5>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">Any type of cancer including leukaemia?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="cancer-yes" value="y" name="cancer" class="form-check-input">
                                                            <label class="form-check-label" for="cancer-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="cancer-no" value="n" name="cancer" class="form-check-input">
                                                            <label class="form-check-label" for="cancer-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">Any problems with your heart or lungs?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="hl-yes" value="y" name="hl" class="form-check-input">
                                                            <label class="form-check-label" for="hl-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="hl-no" value="n" name="hl" class="form-check-input">
                                                            <label class="form-check-label" for="hl-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">A bleeding condition or a blood disease?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="bcbd-yes" value="y" name="bcbd" class="form-check-input">
                                                            <label class="form-check-label" for="bcbd-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="bcbd-no" value="n" name="bcbd" class="form-check-input">
                                                            <label class="form-check-label" for="bcbd-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">Diabetes, thyroid disease, kidney disease, epilepsy (fits)?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="dtke-yes" value="y" name="dtke" class="form-check-input">
                                                            <label class="form-check-label" for="dtke-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="dtke-no" value="n" name="dtke" class="form-check-input">
                                                            <label class="form-check-label" for="dtke-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">Any other chronic medical condition?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="cmc-yes" value="y" name="cmc" class="form-check-input">
                                                            <label class="form-check-label" for="cmc-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="cmc-no" value="n" name="cmc" class="form-check-input">
                                                            <label class="form-check-label" for="cmc-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">used needles to take drugs, steroids, or anything not prescribed by doctor or a nurse</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="dsndn-yes" value="y" name="dsndn" class="form-check-input">
                                                            <label class="form-check-label" for="dsndn-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="dsndn-no" value="n" name="dsndn" class="form-check-input">
                                                            <label class="form-check-label" for="dsndn-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <h5>In the past 12 months</h5>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">Have you been given a Rabies, Tetanus or Hepatitis B vaccination?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="rth-yes" value="y" name="rth" class="form-check-input">
                                                            <label class="form-check-label" for="rth-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="rth-no" value="n" name="rth" class="form-check-input">
                                                            <label class="form-check-label" for="rth-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">Have you participated in a clinical/vaccine trial?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="cvt-yes" value="y" name="cvt" class="form-check-input">
                                                            <label class="form-check-label" for="cvt-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="cvt-no" value="n" name="cvt" class="form-check-input">
                                                            <label class="form-check-label" for="cvt-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label">Have you had sexually transmitted disease (STD)?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="std-yes" value="y" name="std" class="form-check-input">
                                                            <label class="form-check-label" for="std-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="std-no" value="n" name="std" class="form-check-input">
                                                            <label class="form-check-label" for="std-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label ml--2">In the past 36 months, have you had malaria?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="malaria-yes" value="y" name="malaria" class="form-check-input">
                                                            <label class="form-check-label" for="malaria-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="malaria-no" value="n" name="malaria" class="form-check-input">
                                                            <label class="form-check-label" for="malaria-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ml-2">
                                                    <label for="simpleinput" class="form-label ml--2">Do you think your blood is safe for transfustion to a patient?</label>
                                                    <div class="inline-right">
                                                        <div class="form-check form-radio-success form-check-inline">
                                                            <input type="radio" id="trans-yes" value="y" name="trans" class="form-check-input">
                                                            <label class="form-check-label" for="trans-yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-radio-danger form-check-inline">
                                                            <input type="radio" id="trans-no" value="n" name="trans" class="form-check-input">
                                                            <label class="form-check-label" for="trans-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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