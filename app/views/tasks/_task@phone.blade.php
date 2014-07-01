<li id="id_{{ $task->id }}">
  <a href="#setting?id={{ $task->id }}" id="edit_task_link_{{ $task->id }}" data-transition="slidefade">
    <p>
    <table style="width: 100%;"><tr>
        <td style="width: 40px"><span class="label label-info" id="updated_{{ $task->id }}" style="display:inline;">{{ $task->updated_at.strftime("%m/%d") }}</span></td>
        <td class="task-body"><span id="msg_{{ $task->id }}" style="word-break:break-all;"></span></td>
    </tr></table>
    </p>
  </a>
</li>

<script>
(function(){
  var taskAction = KanbanList.taskAction;
  var msg_array = ["{{ $task->msg }}"];
  taskAction.initial({{ $task->id }}, "{{ $task->statusSymbol() }}", msg_array);
}());
</script>
