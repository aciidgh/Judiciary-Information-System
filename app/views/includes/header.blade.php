<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Judiciary Information System</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">

        @if (!Auth::check())
        <li class="{{{ Request::is('login') ? 'active' : '' }}}"><a href="../login">Login</a></li>
        @else
        <li><a href="{{ URL::to('logout') }}">Logout</a></li>
        @endif
        
        <li class="{{{ Request::is('/') ? 'active' : '' }}}"><a href="..//">Home</a></li>
        <li class="{{{ Request::is('addcase') ? 'active' : '' }}}"><a href="../addcase">Add Case</a></li>
        <li class="{{{ Request::is('browse') ? 'active' : '' }}}"><a href="../browse">Browse</a></li>
      </ul>

      <form class="navbar-form navbar-right" role="form">

        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search">
          <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Submit <span class="caret"></span></button>
            <ul class="dropdown-menu dropdown-menu-right" role="menu">
             <li><a href="#">All</a></li>
             <li class="divider"></li>
             <li><a href="#">Resolved</a></li>
             <li><a href="#">Upcoming</a></li>
             <li><a href="#">Pending</a></li>
           </ul>
         </div><!-- /btn-group -->
       </div><!-- /input-group -->
     </form>

   </div><!--/.nav-collapse -->
 </div>
</div>
<br>
<br>
<br>