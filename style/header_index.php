<?php if ($UStatus =='Admin') { ?>
<style>
.dropdown-header:hover .dropdown-header-content {
    display: block;
    cursor: pointer;
    height: 198px;
    border-radius: 8px;
}
</style>
<?php }
if ($UStatus =='Officer') { ?>
<style>
.dropdown-header:hover .dropdown-header-content {
    display: block;
    cursor: pointer;
    height: 165px;
    border-radius: 8px;
}
</style>
<?php }
if ($UStatus =='Member') { ?>
<style>
.dropdown-header:hover .dropdown-header-content {
    display: block;
    cursor: pointer;
    height: 99px;
    border-radius: 8px;
}
</style>
<?php } ?>
<div class="top-container-fluid bg-warning text-dark sticky-top">
      <div class="container">

          <div id="userlog" class="text-right">
          <div class="dropdown-header">
          <?php 
          if ($countrowimgprofile>0){ ?>
          <a href="home/profile.php"><img id="imgminiprofile" src="img/userprofile/<?php echo $row["NameFile"];?>"></a>
          <?php } else { ?>
          <a href="home/profile.php"><img id="imgminiprofile" src="img/imgerror/errorimg.png"></a>
          <?php } ?>
          <a class="usrnametitle" style="text-decoration:none;"><font color="#000000"><?php echo $FirstName." "; echo " ".$LastName." ";?></font></a>
          <div class="dropdown-header-none"></div>
          <div class="dropdown-header-content">
            <div class="usrlist-header">
            <a href="home/profile.php" class="usrlist" style="text-decoration:none;"><font color="#000000">บัญชีของฉัน</font></a>
            <a href="home/myorder.php" class="usrlist" style="text-decoration:none;"><font color="#000000">การซื้อของฉัน</font></a>
            <?php
                if ($UStatus == 'Admin'){ ?>
                  <a href="console/setting_admin.php" class="usrlist" style="text-decoration: none;"><font color="#000000">จัดการผู้ใช้</font></a>
                  <a href="console/setting.php" class="usrlist" style="text-decoration: none;"><font color="#000000">จัดการร้าน</font></a>
                  <a href="index.php" class="usrlist" style="text-decoration:none;"><font color="#000000">ชมหน้าร้าน</font></a>
                <?php } ?>
                <?php
                if ($UStatus == 'Officer'){ ?>
                  <a href="console/setting.php" class="usrlist" style="text-decoration: none;"><font color="#000000">จัดการร้าน</font></a>
                  <a href="index.php" class="usrlist" style="text-decoration:none;"><font color="#000000">ชมหน้าร้าน</font></a>
                <?php } ?>
            <a href="database/kklogout.php" class="usrlist" style="text-decoration:none;"><font color="red">ออกจากระบบ</font></a>
            </div>
          </div>  
          </div>
          </div>
        <div class="row">
            <div class="col-12 col-sm-3" id="logobanner" onclick="location.href='index.php'">
            </div>
              <div class="col-9 col-sm-7">                 
              <form class="form-inline" id="searchform" action="home/search.php" method="POST">
            <input class="search" type="search" name="search" placeholder="ค้นหาหนังสือ" aria-label="Search">
              </form>
              </div>
            <div class="col-3 col-sm-2 pt-1">
              <div class="row">
                <div class="col-3"></div>
                <div class="col-6 flytobasket" id="basketlogo" onclick="location.href='home/basket.php'">
                <?php if ($rowbasket>0){ ?>
                <span class="setbadge badge badge-danger align-top" id="basketlogonum"><?php echo $rowbasket;?></span>
                <?php } else { ?>
                <span style="display:block; padding:25px;"></span>
                <?php } ?>
                </div>
                <div class="col-3"></div>
              </div>
            </div>
        </div>
      </div> <!--END Con -->
            <nav class="navbar navbar-expand-lg navbar-light bg-warning text-dark">
            <div class="container pl-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
				    <li class="nav-item">
                        <a class="nav-link text-dark" href="index.php">หน้าแรก</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-dark" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ประเภทหนังสือ
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="row" style="width: 500px;">
                          <ul class="list-unstyled col-6">
                            <a class="dropdown-header"><strong>การศึกษา</strong></a>
                            <a class="dropdown-item dditedit" href="pagegoods/Education/Mathematics.php">คณิตศาสตร์</a>
                            <a class="dropdown-item dditedit" href="pagegoods/Education/Thai.php">ภาษาไทย</a>
                            <a class="dropdown-item dditedit" href="pagegoods/Education/History.php">ประวัติศาสตร์</a>
                            <a class="dropdown-item dditedit" href="pagegoods/Education/AutobiographyAndBiography.php">อัตชีวประวัติ ชีวประวัติ</a>
                            <a class="dropdown-item dditedit" href="pagegoods/Education/ScienceAndTechnology.php">วิทยาการและเทคโนโลยี</a>
                          </ul>
                          <ul class="list-unstyled col-6">
                            <a class="dropdown-header"><strong>ความรู้ทั่วไป</strong></a>
                            <a class="dropdown-item dditedit" href="pagegoods/GeneralKnowledge/Literature.php">วรรณกรรม</a>
                            <a class="dropdown-item dditedit" href="pagegoods/GeneralKnowledge/Management.php">การบริหาร</a>
                            <a class="dropdown-item dditedit" href="pagegoods/GeneralKnowledge/PersonalDevelopment.php">การพัฒนาตนเอง</a>
                            <a class="dropdown-item dditedit" href="pagegoods/GeneralKnowledge/Cartoon.php">การ์ตูน</a>
                            <a class="dropdown-item dditedit" href="pagegoods/GeneralKnowledge/Travel.php">การท่องเที่ยว</a>
                            <a class="dropdown-item dditedit" href="pagegoods/GeneralKnowledge/FoodAndHealth.php">อาหารและสุขภาพ</a>
                            <a class="dropdown-item dditedit" href="pagegoods/GeneralKnowledge/AgricultureAndNature.php">การเกษตรและธรรมชาติ</a>
                            <a class="dropdown-item dditedit" href="pagegoods/GeneralKnowledge/Family.php">ครอบครัว</a>
                          </ul>
                      </div>
                      </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="home/delivery.php">ติดตามสถานะสินค้า</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="home/code.php">โค้ดส่วนลด</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="home/support.php">ติดต่อเรา</a>
                    </li>
                  </ul>
              </div>
            </div> <!--End con-->
            </nav> <!--End Nev-->
          </div> <!--END Con-->