<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodeIgniter Project1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        
        <!-- <?php echo base_url(); ?> -->

        <form class="form-group form-horizontal" name="form" action="<?php echo base_url('Users/user');?>" method="post">

           

             <div class="mt-3">
                <h1>Registration Form</h1>
             </div>
             <!-- <?php echo validation_errors(); ?> -->

            <div class="form-group mt-5">
            <label for="">Name:</label>
            <input type="text" name="name" value="" class="form-control">   
            <?php echo form_error('name'); ?>
            </div> 

            <div class="form-group">
            <label for="">Email:</label>
            <input type="email" name="email" value="" class="form-control">  
            <?php echo form_error('email'); ?> 
            </div> 

            <button type="submit" class="btn btn-primary mt-3">Create</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>