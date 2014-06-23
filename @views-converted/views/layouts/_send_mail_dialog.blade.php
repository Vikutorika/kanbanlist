<div class="modal hide fade" id="mail_in">
  <div class="modal-header">
    <h3>Send the task list by Email</h3>
  </div>
  <div class="modal-body">
    <p>Please type email address(es).</p>
    <form id="mail_form">
      <input type="text" id="mail_addr" class="span4" placeholder="Mail Address" value="{{ Auth::user()->email }}"/>
      (separated by ",")
    </form>

    <p>Option: please type a comment to enter the body of email.</p>
    <form id="mail_comment_form">
      <input type="text" id="mail_comment" class="span5" placeholder="Comment" value=""/>
    </form>

    <div class="alert">
      Email will be sent from "{{ ENV['MAIL_ADDR'] }}".
    </div>

  </div>
  <div class="modal-footer">
    <button id="send_mail_button" class="btn btn-primary">Send</button>
  </div>
</div>
