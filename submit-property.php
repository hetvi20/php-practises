<?php include("spheader.php"); ?>
<?php include("spslider.php"); ?>




            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5 dashboard-content">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><h4>Submit Property</h4></div>
                            <div class="col-sm-12 col-md-6">
                                <div class="breadcrumb-nav">
                                    <ul>
                                        <li>
                                            <a href="index.html">Index</a>
                                        </li>
                                        <li>
                                            <a href="dashboard.html">Dashboard</a>
                                        </li>
                                        <li class="active">Submit Property</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-address dashboard-list">
                        <form method="GET">
                            <h4 class="bg-grea-3">Basic Information</h4>
                            <div class="search-contents-sidebar">
                                <div class="row pad-20">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Property Title</label>
                                            <input type="text" class="input-text" name="your name" placeholder="Property Title">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="selectpicker search-fields" name="for-sale">
                                                <option>For Sale</option>
                                                <option>For Rent</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" class="input-text" name="your name" placeholder="USD">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Area/Location</label>
                                            <input type="text" class="input-text" name="your name" placeholder="SqFt">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Rooms</label>
                                            <select class="selectpicker search-fields" name="1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Bathroom</label>
                                            <select class="selectpicker search-fields" name="1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="bg-grea-3">Location</h4>
                            <div class="row pad-20">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="input-text" name="address"  placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>State</label>
                                        <select class="selectpicker search-fields" name="choose-state">
                                            <option>Choose State</option>
                                            <option>Alabama</option>
                                            <option>California</option>
                                            <option>Florida</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input type="text" class="input-text" name="zip"  placeholder="Postal Code">
                                    </div>
                                </div>
                            </div>
                            <h4 class="bg-grea-3">Property Gallery</h4>
                            <div class="row pad-20">
                                <div class="col-lg-12">
                                    <div id="myDropZone" class="dropzone dropzone-design">
                                        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="bg-grea-3">Detailed Information</h4>
                            <div class="row pad-20">
                                <div class="col-lg-12">
                                    <textarea class="input-text" name="message" placeholder="Detailed Information"></textarea>
                                </div>
                            </div>
                            <h4 class="bg-grea-3">Features (optional)</h4>
                            <div class="row pad-20">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="checkbox checkbox-theme checkbox-circle">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">
                                            Free Parking
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="checkbox checkbox-theme checkbox-circle">
                                        <input id="checkbox2" type="checkbox">
                                        <label for="checkbox2">
                                            Air Condition
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="checkbox checkbox-theme checkbox-circle">
                                        <input id="checkbox4" type="checkbox">
                                        <label for="checkbox4">
                                            Swimming Pool
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="checkbox checkbox-theme checkbox-circle">
                                        <input id="checkbox5" type="checkbox">
                                        <label for="checkbox5">
                                            Laundry Room
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="checkbox checkbox-theme checkbox-circle">
                                        <input id="checkbox7" type="checkbox">
                                        <label for="checkbox7">
                                            Central Heating
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="checkbox checkbox-theme checkbox-circle">
                                        <input id="checkbox8" type="checkbox">
                                        <label for="checkbox8">
                                            Alarm
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="checkbox checkbox-theme checkbox-circle">
                                        <input id="checkbox3" type="checkbox">
                                        <label for="checkbox3">
                                            Places to seat
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="checkbox checkbox-theme checkbox-circle">
                                        <input id="checkbox6" type="checkbox">
                                        <label for="checkbox6">
                                            Window Covering
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <h4 class="bg-grea-3">Contact Details</h4>
                            <div class="row pad-20">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="input-text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="input-text" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Phone (optional)</label>
                                        <input type="text" class="input-text" name="phone"  placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <a href="#" class="btn btn-md button-theme">Submit Property</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <p class="sub-banner-2 text-center"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard end -->
<?php include("spfooter.php"); ?>

