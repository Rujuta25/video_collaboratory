<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">VideoCollaboratory</a>
    </div>
    <ul class="nav navbar-nav">
      <!--<li class="active"><a href="#">Home</a></li> -->
      <li><a href="{{ route('home.index') }}">Home</a></li>
      <li><a href="{{ route('statistics.stat') }}">Statistics</a></li>
      <li><a href="{{ route('notifications.not') }}">Notification</a></li>
      <li><a href="{{ route('upload_videos.upload') }}">Upload Videos</a></li>
      <li><a href="{{ route('manage_class.managecl') }}">Manage Class</a></li>
    </ul>
  </div>
</nav>