

 <ion-view id = "devicec" title="Hệ thống">
          <?php 
			$CI =& get_instance();
			$CI->load->library('core/user');
			if($CI->user->isLogin()){											  
			}else{
				echo ' <ion-content class="padding">
      						  <ul class="list">   
									<a href="#/tab/welcome" class="button icon-right ion-chevron-right button-calm">Please login to home</a>
							 </ul>
						</ion-content>
					';
				exit;
			}
		?> 
    <ion-content class="padding" style="background:  #eee" >
         <div class="list card">
                <a href="#/tab/home" class="item item-icon-left">
                <i class="icon ion-home"></i>
                Về giao diện chính 
                </a>
                <a href="#/tab/messenger" class="item item-icon-left">
                <i class="icon ion-chatboxes"></i>
                Chát với gia đình 
                </a>    
                <a href="#/tab/ipcamera" class="item item-icon-left">
                <i class="icon ion-share"></i>
                Quản lý cửa ra vào 
                </a>           
                   
                <a href="#" class="item item-icon-left">
                <i class="icon ion-wifi"></i>
                Xem thông tin hệ thống
                </a> 
                <a href="#/tab/introduce" class="item item-icon-left">
                <i class="icon ion-card"></i>
                Giới thiệu về phần mềm
                </a>
                <a href='#/tab/setting'class="item item-icon-left">
                <i class="icon ion-settings"></i>
                Cài đặt chung
                </a>
        </div>
        <div class="list card">
              <a href="#/tab/manageaccount" class="item item-icon-left">
                <i class="icon ion-person"></i>
                Quản lý tài khoản
                </a>  
                <a href="#/tab/register" class="item item-icon-left">
                <i class="icon ion-person-add"></i>
                Tạo tài khoản mới
                </a>               
                <a href='<?php echo base_url().'index.php/'.'admin/login/logout/'?> 'class="item item-icon-left">
                <i class="icon ion-log-out"></i>
                Đăng xuất / Thay đổi tài khoản
                </a>
             
        </div>
    </ion-content>
</ion-view>
