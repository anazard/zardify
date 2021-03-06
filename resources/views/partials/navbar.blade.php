<!-- Navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top" nav-scroll ng-class="{scroll:changeClass}">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href={{ route('/') }}><span class="glyphicon glyphicon-home" ></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li>
          <a href={{ route('/api/posts') }}><span class="glyphicon glyphicon-music" ></span> Music</a>
        </li>
        <li>
          <a href="#"><span class="glyphicon glyphicon-qrcode" ></span> Technology</a>
        </li>
        <li>
          <a href="#"><span class="glyphicon glyphicon-flag" ></span> Random stuff</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
