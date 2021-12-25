<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-justified nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">最新消息</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">活動快訊</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">

      <?php include("messages.php"); ?>

    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
      <?php include("profile.php"); ?>
    </div>
  </div>

</div>
