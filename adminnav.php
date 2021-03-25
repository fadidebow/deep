 <nav class="navbar navbar-light" style="background-color: #00395d">
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
      <li class="active"><a href="admin.php" style="color: #00aeef;font-size: 19px;"> <span class="fa fa-home"></span> الرئيسية</a></li>
     
       <li class="dropdown">
        <a style="color: #00aeef;font-size: 19px;" class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="fa fa-home"></span>الجامعات
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addcollage.php"><span class="fa fa-plus"></span> اضافة جامعة </a></li>
          <li><a href="mcol.php"><span class="fa fa-edit"></span> تعديل - حذف الجامعات  </a></li>
          
        </ul>
      </li>
      <li class="dropdown">
        <a style="color: #00aeef;font-size: 19px;" class="dropdown-toggle" data-toggle="dropdown" href="#">الاختصاصات  
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addsection.php"><span class="fa fa-plus"></span> اضافة  اختصاص  </a></li>
          <li><a href="msection.php"> <span class="fa fa-edit"></span> ادارة  الاختصاصات </a></li>
          
        </ul>
      </li>

       <li class="dropdown">
        <a style="color: #00aeef;font-size: 19px;" class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-users"></span> الموظفين 
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addemp.php"><span class="fa fa-plus"></span> اضافة موظف  </a></li>
          <li><a href="memp.php"><span class="fa fa-edit"></span> ادارة الموظفين</a></li>
          
        </ul>
      </li>

       <li class="dropdown">
        <a style="color: #00aeef;font-size: 19px;" class="dropdown-toggle" data-toggle="dropdown" href="#">الارقام السرية  
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addnumber.php"><span class="fa fa-plus"></span> اضافة ارقام  </a></li>
          <li><a href="mnumber.php"><span class="fa fa-edit"></span>  احصائيات  الارقام  </a></li>
          
        </ul>
      </li>

       <li class="dropdown">
        <a style="color: #00aeef;font-size: 19px;" class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-book"></span> الاسئلة  
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="mquestion.php"><span class="fa fa-edit"></span>  احصائيات الاسئلة  </a></li>
          
        </ul>
      </li>

       <li class="dropdown">
        <a style="color: #00aeef;font-size: 19px;" class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-camera"></span>  الملفات والفيديوهات  
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addvideo.php"><span class="fa fa-plus"></span> اضافة فيديو    </a></li>
           <li><a href="addbook.php"><span class="fa fa-plus"></span> اضافة مرجع     </a></li>
          <li><a href="mbook.php"><span class="fa fa-edit"></span> ادارة   المراجع </a></li>
             <li><a href="mvideo.php"><span class="fa fa-edit"></span>  ادارة   الفيديوهات  </a></li>
          
        </ul>
      </li>


        <li class="dropdown">
        <a style="color: #00aeef;font-size: 19px;" class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-bookmark"></span>  المكاتب 
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addlib.php"><span class="fa fa-plus"></span> اضافة مكتبة    </a></li>
           <li><a href="mlib.php"><span class="fa fa-edit"></span> ادارة المكاتب     </a></li>
      
          
        </ul>
      </li>
         
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="index.php" style="color: #00aeef;font-size: 19px;"><span class="fa fa-user"></span> تسجيل الخروج </a></li>
    </ul>
    </div>
  </div>
</nav>