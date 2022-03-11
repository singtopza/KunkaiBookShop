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
<?php require ('../php/imgprofile.php'); ?>
<div class="top-container-fluid bg-warning text-dark sticky-top">
    <div class="container pl-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning text-dark" style="float: left;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                        <a class="nav-link text-dark" href="../console/setting_admin.php">หน้าแรก</a>
                    </li>
				            <li class="nav-item">
                        <a class="nav-link text-dark" href="../console/foruser.php">จัดการลูกค้า</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="../console/foradmin.php">จัดการผู้ใช้</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="../console/team.php">ผู้จัดทำ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="../console/onlineclass.php">เรียนออนไลน์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="../console/fortest.php">ทดสอบฟอร์ม</a>
                    </li> 
                  </ul>
              </div>
            </nav> <!--End Nev-->
    <div id="userlog" class="text-right">
          <div class="dropdown-header">
          <?php 
          if ($countrowimgprofile>0){ ?>
          <a href="../home/profile.php"><img id="imgminiprofile" src="../img/userprofile/<?php echo $row["NameFile"];?>"></a>
          <?php } else { ?>
          <a href="../home/profile.php"><img id="imgminiprofile" src="../img/imgerror/errorimg.png"></a>
          <?php } ?>
          <a class="usrnametitle" style="text-decoration:none;"><font color="#000000"><?php echo $FirstName." "; echo " ".$LastName." ";?></font></a>
          <div class="dropdown-header-none"></div>
          <div class="dropdown-header-content">
            <div class="usrlist-header">
            <a href="../home/profile.php" class="usrlist" style="text-decoration:none;"><font color="#000000">บัญชีของฉัน</font></a>
            <a href="../home/myorder.php" class="usrlist" style="text-decoration:none;"><font color="#000000">การซื้อของฉัน</font></a>
            <?php
                if ($UStatus == 'Admin'){ ?>
                  <a href="../console/setting_admin.php" class="usrlist" style="text-decoration: none;"><font color="#000000">จัดการผู้ใช้</font></a>
                  <a href="../console/setting.php" class="usrlist" style="text-decoration: none;"><font color="#000000">จัดการร้าน</font></a>
                  <a href="../index.php" class="usrlist" style="text-decoration:none;"><font color="#000000">ชมหน้าร้าน</font></a>
                <?php } ?>
                <?php
                if ($UStatus == 'Officer'){ ?>
                  <a href="../console/setting.php" class="usrlist" style="text-decoration: none;"><font color="#000000">จัดการร้าน</font></a>
                  <a href="../index.php" class="usrlist" style="text-decoration:none;"><font color="#000000">ชมหน้าร้าน</font></a>
                <?php } ?>
            <a href="../database/kklogout.php" class="usrlist" style="text-decoration:none;"><font color="red">ออกจากระบบ</font></a>
            </div>
          </div>  
          </div>
          <div><marquee onmouseover= stop(); onmouseout= start();><i class="fa fa-bullhorn" style="color:black;" aria-hidden="true"></i>&nbsp&nbsp แจ้งพนักงานที่เกี่ยวข้อง วันที่ 32 มกราคม 2565 ถึง 33 มกราคม 2565 งดการจัดการบนเว็บไซต์ในส่วนของออเดอร์สินค้า เนื่องจากเกิดปัญหาในการคำนวนราคาสินค้าที่ไม่ถูกต้อง ทำให้สงผลกระพบกับทางร้านอย่างมาก ขณะนี้แอดมินเว็บไซต์กำลังเร่งมือแก้ไขปัญหาดังกล่าว</marquee></div>
          </div>
      </div> <!--END Con -->
          </div> <!--END Con-->