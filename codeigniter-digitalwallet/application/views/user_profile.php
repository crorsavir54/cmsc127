<?php
$user_id=$this->session->userdata('user_id');

if(!$user_id){

  //redirect('user/login_view');
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Profile Dashboard-CodeIgniter Login Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="col-md-4">

      <table class="table table-bordered table-striped">


        <tr>
          <th colspan="2"><h4 class="text-center">User Info</h3></th>

        </tr>
          <tr>
            <td>Student Number</td>
            <td><?php echo $this->session->userdata('studentnumber'); ?></td>
          </tr>
          <tr>
            <td>Balance</td>
            <td><?php echo $this->session->userdata('balance');  ?></td>
          </tr>
      </table>
        
        <form>
            <?php echo form_button("a", "P10"); ?>
            <?php echo form_button("b", "P20"); ?>
            <?php echo form_button("c", "P100"); ?>
        </form>


    </div>
  </div>
<a href="<?php echo base_url('user/logout_user');?>" >  <button type="button" class="btn-primary">Logout</button></a>
</div>
  </body>
</html>
