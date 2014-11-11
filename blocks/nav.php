<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">      
      <a class="navbar-brand" href="main_page.php"><img alt="Brand" src="resourse/b2b-icon.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <!-- <li><a href="#Imbox">Imbox</a></li>     -->        
     </ul>
     <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a><span class="glyphicon glyphicon-user"></span> Signed in as<?echo '<span style="color:#428bca;text-align:center;"> '.$_SESSION['username'].'</span>';?></a></li> 
        <li><a><span class="glyphicon glyphicon-registration-mark"></span> Company<?echo '<span style="color:#428bca;text-align:center;"> '.$_SESSION['company'].'</span>';?></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Sign out</a></li>
      </ul>
      <form action="search.php" method="get" class="navbar-form navbar-right">
        <input type="text" class="form-control" placeholder="Search...">
      </form>
    </div>
  </div>
</nav>	