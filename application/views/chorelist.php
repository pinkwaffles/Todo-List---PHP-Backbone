<table class="table">
  <tr>
    <th>Completed</th>
    <th>Chore</th>
    <th>Date</th>
  </tr>
</table>
<script type="text/javascript" src="../js/bower_components/jquery/dist/jquery.js"></script>
<script type="text/javascript" src="../js/bower_components/underscore/underscore.js"></script>
<script type="text/javascript" src="../js/bower_components/backbone/backbone.js"></script>
<div id="app"></div>
<script src="../js/lib/templateUrl.js"></script>
<script src="../js/models/task.js"></script>
<script src="../js/collections/tasks.js"></script>
<script src="../js/views/todo.js"></script>
<script src="../js/views/todoList.js"></script>
<script src="../js/views/app.js"></script>
<script>
  backboneReady(() => {
    new AppView({}).render();
  });
</script>