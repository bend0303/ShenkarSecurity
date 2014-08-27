<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<div style="position: fixed; top:0; width: 100%; height: 60px; background-color: lightgray;">

    <div class="row">
        <div class="col-lg-6">
            <div style="text-align: left; margin-left: 120px; ">
                <H4>Shenkar's Security Engineer - Final project<small style="margin-left:8px;">Submitted by Or Guz & Ben Diamant</small></H4>
            </div>
        </div>
        <div class="col-lg-6">
            <div style="text-align: right; margin-right: 120px; margin-top:20px;">
                <a class="btn btn-primary btn-sm" href="/">
                    Login
                </a>
            </div>
        </div>
    </div>

</div>

<div style="background-color: rgb(240, 240, 240);margin-top: 100px;" class="container">
    <h1><?php echo lang('create_user_heading'); ?></h1>
    <p><?php echo lang('create_user_subheading'); ?></p>
    <div style="color: darkgreen" id="infoMessage"><?php echo $message;?></div>

    <?php echo form_open("auth/create_user"); ?>
    <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" class="form-control" name="first_name" value="" id="first_name"/></div>
    <div class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text" class="form-control" name="last_name" value="" id="last_name"/></div>
    <div class="form-group">
        <label for="company">Company</label>
        <input type="text" class="form-control" name="company" value="" id="company"/></div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" value="" id="email"/></div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="phone" class="form-control" name="phone" value="" id="phone"/></div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password"  class="form-control" name="password" value="" id="password"/></div>
    <div class="form-group">
        <label for="password_confirm">Repeat Password:</label>
        <input type="password"  class="form-control" name="password_confirm" value="" id="password_confirm"/></div>

    <div class="form-group">
        <input type="submit" name="submit" class="btn btn-primary btn-md" value="Login"/>
    </div>
    <?php echo form_close(); ?>

    <div id="infoMessage"><?php echo $message; ?></div>
    <p><?php echo anchor('', lang('index_create_user_link')) ?></p>
</div>