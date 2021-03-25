 <nav class="navbar navbar-light" style="background-color: #001527">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="border: 1px solid white">
        <span class="icon-bar" style="background-color: white;color: white"></span>
        <span class="icon-bar" style="background-color: white;color: white"></span>
        <span class="icon-bar" style="background-color: white;color: white"></span>
      </button>
      <a class="navbar-brand" href="#">لوحة التحكم</a>
    </div>
    <div id="myNavbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="emp.php" style="color: #00aeef;font-size: 19px;"> <span class="fa fa-home"></span> الرئيسية</a></li>
     
       <li class="dropdown">
        <a style="color: #00aeef;font-size: 19px;" class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="fa fa-home"></span>الفصول
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addsemester.php"><span class="fa fa-plus"></span> اضافة فصل </a></li>
          <li><a href="msemester.php"><span class="fa fa-edit"></span> ادارة  الفصول </a></li>
          
        </ul>
      </li>
      <li class="dropdown">
        <a style="color: #00aeef;font-size: 19px;" class="dropdown-toggle" data-toggle="dropdown" href="#">المواد 
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addsubject.php"><span class="fa fa-plus"></span>  اضافة مادة  </a></li>
          <li><a href="msubject.php"> <span class="fa fa-edit"></span> ادارة المواد </a></li>
          
        </ul>
      </li>

       <li class="dropdown">
        <a style="color: #00aeef;font-size: 19px;" class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-users"></span> الاسئلة  
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addquestion.php"><span class="fa fa-plus"></span> اضافة اسئلة </a></li>
          <li><a href="mquestion.php"><span class="fa fa-edit"></span> ادارة  الاسئلة </a></li>
          
        </ul>
      </li>


        <li class="dropdown">
        <a style="color: #00aeef;font-size: 19px;" class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-camera"></span>  الملفات والفيديوهات  
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addvideo1.php"><span class="fa fa-plus"></span> اضافة فيديو    </a></li>
           <li><a href="addbook1.php"><span class="fa fa-plus"></span> اضافة مرجع     </a></li>
          <li><a href="mbook1.php"><span class="fa fa-edit"></span> ادارة   المراجع </a></li>
             <li><a href="mvideo1.php"><span class="fa fa-edit"></span>  ادارة   الفيديوهات  </a></li>
          
        </ul>
      </li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="index.php" style="color: #00aeef;font-size: 19px;"><span class="fa fa-user"></span> تسجيل الخروج </a></li>
    </ul>
    </div>
  </div>
</nav>