
    <!-- wrapper -->
    <div class="wrapper">
        <div class="section-authentication-login d-flex align-items-center justify-content-center mt-4">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="card radius-15 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-xl-12">
                                <div class="card-body p-5">
                                    <div class="text-center">
                                        <img src="<?=base_url()?>assets/img/backend/logo_ppabk.jpeg" width="80" alt="">
                                        <h3 class="mt-4 font-weight-bold">Login SIPAMAN</h3>
                                    </div>
                                    <div class="">
                                        <div class="form-body">
                                            <form class="row g-3" action="" method="POST">
                                                <div class="col-12">
                                                    <label for="inputEmailAddress" class="form-label">Username</label>
                                                    <input type="text" name="username" class="form-control" id="inputEmailAddress" placeholder="Username">
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputChoosePassword" class="form-label">Password</label>
                                                    <div class="input-group" id="show_hide_password">
                                                        <input type="password" name="password" class="form-control border-end-0" id="inputChoosePassword" placeholder="Password"> 
                                                        <a href="javascript:;" class="input-group-text bg-transparent"></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                                                        <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                                    </div> -->
                                                </div>
                                                <div class="col-12" style="margin-top: 30px;">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-primary"><a href="<?=site_url('Dashboard/index')?>" style="text-decoration:none ; color:white">Login</a></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!--end row-->
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->


