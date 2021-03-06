    <div class="main">
    <?php 
	$attributes = array('class' => 'form-horizontal');
	echo form_open('admin/add_user',$attributes); 
	?>
    <fieldset>
    <div id="legend">
    <legend class="">เพิ่มผู้ใช้</legend></div>
    <div class="control-group">
    <label class="control-label" for="username">Role</label>
    <div class="controls">
    	<select name="role" id="role">
    	<?php
    	foreach($role as $row2)
    	{
    		echo '<option value="'.$row2->rid.'">'.$row2->role_name.'</option>';
    	}
    	?>
    	</select>
    </div>
    </div>

    <div class="control-group">
    <label class="control-label" for="username">Username</label>
    <div class="controls">
    <input type="text" id="username" name="username" placeholder="" class="input-xlarge"><?php echo form_error('username', '<div class="error">', '</div>'); ?></div>
    </div>
     
    <div class="control-group">
    <label class="control-label" for="email">อีเมล์</label>
    <div class="controls">
    <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
    <?php echo form_error('email', '<div class="error">', '</div>'); ?></div>
    </div>
     
    <div class="control-group">
    <label class="control-label" for="password">รหัสผ่าน</label>
    <div class="controls">
    <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
    <?php echo form_error('password', '<div class="error">', '</div>'); ?></div>
    </div>
     
    <div class="control-group">
    <label class="control-label" for="password_confirm">รหัสผ่าน (ยืนยัน)</label>
    <div class="controls">
    <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
    <?php echo form_error('password_confirm', '<div class="error">', '</div>'); ?></div>
    </div>
    
    <div class="control-group">
    <label class="control-label" for="firstname">ชื่อ</label>
    <div class="controls">
    <input type="text" id="firstname" name="firstname" placeholder="" class="input-xlarge">
    <?php echo form_error('firstname', '<div class="error">', '</div>'); ?></div>
    </div>
    
    <div class="control-group">
    <label class="control-label" for="lastname">นามสกุล</label>
    <div class="controls">
    <input type="text" id="lastname" name="lastname" placeholder="" class="input-xlarge">
    <?php echo form_error('lastname', '<div class="error">', '</div>'); ?></div>
    </div>
 
    <div class="control-group">
    <label class="control-label" for="lastname">เบอร์โทร</label>
    <div class="controls">
    <input type="text" id="tel" name="tel" placeholder="" class="input-xlarge">
    <?php echo form_error('tel', '<div class="error">', '</div>'); ?></div>
    </div>
    
    <div class="control-group">
    <label class="control-label" for="lastname">ที่อยู่</label>
    <div class="controls">
    <textarea  id="address" name="address" placeholder="" class="input-xlarge"></textarea>
    <?php echo form_error('address', '<div class="error">', '</div>'); ?></div>
    </div>
        
    <div class="control-group">
    <div class="controls">
    <input type="submit" class="btn btn-success" name="submit" id="submit" value="เพิ่ม" />
    </div>
    </div>
    </fieldset>
    </form>
    </div>
