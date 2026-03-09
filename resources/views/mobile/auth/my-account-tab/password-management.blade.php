<div id="password-management" class="tab-content">

                        <div class="midical-form v1 detail">

                            <div class="pha-res-pass">
                                <div class="pass-title app-heading">
                                    <p>Update your account password</p>
                                </div>
                                <form class="forms-sample" method="post" id="update-password-form"
                                action="{{ route('update-password') }}">
                                @csrf
                                <div class="form">
                                    <div class="form-row">
                                        <div class="col-100 form-group">
                                            <label>Old Password <span class="required-ico">*</span></label>
                                            <input class="form-control" type="password" name="current_password"
                                                placeholder="Your Old Password">
                                            @error('current_password')
                                            <span class="error" role="alert">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-100 form-group">
                                            <label>New Password <span class="required-ico">*</span></label>
                                            <input class="form-control" type="password" name="password"  id="password"
                                                placeholder="Enter Your New Password">
                                                @error('password')
                                            <span class="error" role="alert">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-100 form-group">
                                            <label>Confirm Password <span class="required-ico">*</span></label>
                                            <input class="form-control" type="password" name="password_confirmation"
                                                placeholder="Enter Your Confirm Password">
                                            @error('password_confirmation')
                                            <span class="error" role="alert">{{ $message }}</span>
                                            @enderror    
                                        </div>
                                        <div class="col-100 cta">
                                            <button type="submit" class="primary-button">Update</button>
                                            
                                        </div>
                                    </div>
                                </div>
            </form>
         </div>
    </div>
</div>