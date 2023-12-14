<?php
    if(is_array($listtk)){
        extract($listtk);
    }
?>
     <form action="index.php?act=updatetk" method="post"  enctype="multipart/form-data">
    <div class="title"><h2 style="text-align: center;"> QUẢN LÍ KHÁCH HÀNG</h2></div>
    <div class="mb-3">
        <input name="user" type="text" value="<?php echo $user;?>" disabled class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
    </div>
    <div class="mb-3">
        <input name="pass" type="text" value="<?php echo $pass;?>" disabled class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
    </div>
    <div class="mb-3">
        <input name="email" type="text" value="<?php echo $email;?>" disabled class="form-control" placeholder="Email" aria-label="Email" aria-describedby="addon-wrapping">
    </div>
    <div class="mb-3">
        <input name="address" type="text" value="<?php echo $address;?>" disabled class="form-control" placeholder="Address" aria-label="Address" aria-describedby="addon-wrapping">
    </div>
    <div class="mb-3">
        <input name="tel" type="text" value="<?php echo $tel;?>" disabled class="form-control" placeholder="Tel" aria-label="Tel" aria-describedby="addon-wrapping">
    </div>

    <div class="mb-3">
  <label for="disabledTextInput" class="form-label">Phân quyền</label>
  <select name="phanquyen" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
  <option value="0">Khách hàng</option>
  <option value="1">Admin</option>
</select>
  </div>
  <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
    <input type="submit" name="updatetk" value="Sửa" style="padding: 10px 20px; 
        font-size: 16px; 
        cursor: pointer; 
        background-color: #007BFF; 
        color: #fff; 
        border: none; 
        border-radius: 5px;">
    <a href="index.php?act=listtk">  
        <input type="button" value="list" style="padding: 10px 20px; 
            font-size: 16px; 
            cursor: pointer; 
            background-color: #007BFF; 
            color: #fff; 
            border: none; 
            border-radius: 5px;">
    </a>
    <?php
        if(isset($thongbao) && ($thongbao != "")) echo $thongbao
    ?>
</form>
