
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Profile Dashboard-CodeIgniter Login Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        td {
            white-space: nowrap; overflow: hidden; text-overflow:ellipsis;
        }
    </style>
  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="col-md-4">

      <table class="table table-bordered table-striped">
          <tbody>
              <thead class="thead-dark">
                  <th>TransactionID</th>
                  <th>type</th>
                  <th>cost</th>
                  <th>time_created</th>
                  <th>time_approved</th>
                  <th>StudentNumber</th>
                  <th>new_balance</th>
                  <th>is_approved</th>
              </thead>
            <?php foreach($this->session->userdata("transactions") as $row): ?>
            <tr>   
                <td><?php echo $row->TransactionID; ?></td>
                <td><?php echo $row->type; ?></td>
                <td><?php echo $row->cost; ?></td>
                
                <td><?php echo $row->time_created; ?></td>
                
                <td><?php echo $row->time_approved; ?></td>
                
                <td><?php echo $row->StudentNumber;?></td>
                
                <td><?php echo $row->new_balance; ?></td>
                
                <td><a href="
                    <?php 
                    echo base_url('user/approve_transaction/' . $row->TransactionID . '');
                    ?>">
                    <?php if (!$row->is_approved) echo form_button($row->TransactionID, "Approve"); else echo form_button($row->TransactionID, "Disapprove"); ?></a></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
      </table>
        


    </div>
  </div>
</div>
  </body>
</html>
