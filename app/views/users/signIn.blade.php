<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12"></div>

    {{ Form::open(array('url) => 'users/signUp', 'method' => 'put')) }}
      <fieldset>
        <legend>ログイン</legend>
        <div class="control-group">
          <?php echo Form::label('email', 'email'); ?>
          <div class="controls">
            <?php echo Form::text('email'); ?>
          </div>
        </div>
        <div class="control-group">
          <?php echo Form::label('password', 'password'); ?>
          <div class="controls">
            <?php echo Form::password('password'); ?>
          </div>
        </div>

        <div class="control-group">
          <div class="controls">
            <?php echo Form::submit('ログイン'); ?>
            <button id="login_with_sample" class="btn btn-inverse">サンプルアカウントでログイン</button>
          </div>
        </div>
      </fieldset>
    {{ Form::close() }}
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
  $("#login_with_sample").click(function(){
    $("#user_email").val("sample@kanban.list");
    $("#user_password").val("sample");
    submit();
  });
});
</script>
