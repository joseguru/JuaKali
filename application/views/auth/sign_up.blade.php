<div class="span5">
<strong>Create an account if you are new here:</strong>
<br/>
<br/>
{{Form::open('auth', 'POST', array('class' => 'form-horizontal'))}}
    <div class="control-group">
        <label class="control-label" for="inputEmail">Your email</label>
        <div class="controls">
            <input name="email" class="input-xlarge" value="{{Input::old('email')}}" type="text" id="inputEmail" placeholder="Email">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="inputPassword">Your username</label>
        <div class="controls">
            <input name="username" class="input-xlarge" value="{{Input::old('username')}}" type="text" placeholder="Username">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="inputPassword">Create a password</label>
        <div class="controls">
            <input name="password" class="input-xlarge" value="{{Input::old('password')}}" type="password" id="inputPassword" placeholder="Password">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="inputPassword">Confirm password</label>
        <div class="controls">
            <input name="password_confirmation" class="input-xlarge" type="password" id="confirmPassword" placeholder="Password">
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <label class="checkbox">
                <input name="terms" type="checkbox"><a href="#">I agree terms and conditions</a>
            </label>
            <button type="submit" class="btn">Create account</button>
        </div>
    </div>
    <hr>
    <strong>Or create an account with your social profiles:</strong><br/>
    <a href="#" class="btn btn-facebook"><i class="icon icon-facebook"></i> Facebook</a>
    <a href="#" class="btn btn-twitter"><i class="icon icon-twitter"></i> Twitter</a>
    <hr>
{{Form::close()}}
</div><!--/span5-->