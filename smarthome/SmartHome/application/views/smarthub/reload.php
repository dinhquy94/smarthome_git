<?php function load($messages){ ?>
	 <?php $datetime=""; ?>
	 <?php if(count($messages) == 0 ): ?>
	 	<div class="card">
		  <div class="item item-text-wrap" style="text-align: center;">
		    No result !
		  </div>
		</div>
	 <?php endif; ?>
		<?php foreach($messages as $message): ?>
 	<?php if($message['Date'] != $datetime): ?>
		 <div class="item item-divider">
		 <?php echo $message['Date']; $datetime =  $message['Date']; ?> 
		 </div>
	 <?php endif; ?>
    <a class="item  item-icon-left"   onclick="Hub_SetRead(<?php echo $message['MessageId'].',\''.$message['Reference'].'\'' ;?>);"  style="padding-top: 5px;padding-bottom: 5px; min-height: 0px;">
      <i id="icon-display" style="font-size: 35px; "  class="<?php if($message['status'] == '1' ){echo 'status-change';  } ?> icon <?php if($message['IconMessage']==""){echo 'ion-ionic';} else{echo $message['IconMessage'];} ?> "></i>
      <h2>
	      <div>  
		      <div style="float: left;" ><?php echo $message['Title']; ?></div>
		      <div style="float: right; font-size: 12px;"><?php echo $message['Time']; ?></div>
	      </div> 
      </h2>
           <p><?php echo $message['MessageContent']; ?></p> 
     </a>
    <?php endforeach; ?>
	<?php } ?>
 <div class="list" style="margin-top: 40px;" > 
 	<?php  load($messages);?>
 </div>