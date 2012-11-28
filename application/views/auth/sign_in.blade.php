<div class="span5">
    <strong>Log in for members:</strong>
    <br/>
    <br/>
    {{ Form::open('auth/new', 'post', array('class'=>'form-horizontal')) }}
        <div class="control-group">
            <label class="control-label" for="inputEmail">Email</label>
            <div class="controls">
                <input name="user_email" value="{{ Input::old('user_email') }}" class="input-xlarge" type="text" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">Password</label>
            <div class="controls">
                <input name="user_password" value="{{ Input::old('user_password') }}" class="input-xlarge" type="password" id="inputPassword" placeholder="Password">
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <label class="checkbox">
                    <input name="remember" type="checkbox"> Remember me
                </label>
                <button type="submit" class="btn">Log In</button>
                <br/>

            </div>
        </div>
        <a href="#">Recover password or username &raquo;</a>
        <hr>
        <strong>Or login with your social profiles:</strong><br/>
        <a href="#" class="btn btn-facebook"><i class="icon icon-facebook"></i> Facebook</a>
        <a href="#" class="btn btn-twitter"><i class="icon icon-twitter"></i> Twitter</a>
        <hr>
    </form>

</div><!--/span5-->