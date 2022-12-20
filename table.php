<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Surname</th>
            <th>MembershipNO</th>
            <th>PhoneNO</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if(mysqli_num_rows($results) > 0)
        {
            while($row = mysqli_fetch_array($results)){
                ?>
                    <tr>
                    
                    <td> <?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['middlename']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['member_no']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['gender']; ?></td> 
                    <td><?php echo $row['email']; ?><td> 
                    <td>
                        <button type="submit" class="btn btn-success">Edit</button>
                    </td>    
                    <td>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </td>           
                </tr>
 <?php
                }
        }
        else{
            echo "No Record Found";
        }
        ?>
    </tbody>
</table>