<html>
<head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>static/js/ShenkarPosts.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <title>Final Project - Or and Ben</title>
</head>
<body>
<style>
    * {
        font-family: Raleway;
    }
</style>
<div style="position: fixed; top:0; width: 100%; height: 60px; background-color: lightgray;">

    <div class="row">
        <div class="col-lg-8">
            <div style="text-align: left; margin-left: 120px; ">
                <H4>Shenkar's Security Engineer - Final project<small style="margin-left:8px;">Submitted by Or Guz & Ben Diamant</small></H4>
                Hello <?php echo ucwords($currentuser['username']);?>!
            </div>
        </div>
        <div class="col-lg-4">
            <div style="text-align: right; margin-right: 120px; margin-top:20px;">
                <!-- Button trigger modal -->
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                    New post
                </button>
                <a class="btn btn-warning btn-sm" href="auth/logout">
                    Logout
                </a>
            </div>
        </div>
    </div>

</div>
<div style="margin-top: 60px;" class="container">
    <h1>Posts</h1>
    <div id="infoMessage"><?php echo $message; ?></div>
    <?php foreach ($posts as $post): ?>
        <div style="margin-bottom: 25px; background-color: rgb(243, 243, 243); padding: 2px;" class="postWrapper">

            <h1 style="margin-left: 10px;"><?php echo $post->content; ?></h1>
            <h4 style="margin-left: 5px;"><?php echo $post->subject; ?>
                <small style="margin-left: 8px;">Added by <?php echo ucwords($post->first_name) . ' ' . ucwords($post->last_name); ?>
                    on <?php echo $post->timestamp; ?></small>
            </h4>
        </div>
    <?php endforeach; ?>




    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">New Post</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="uid" id="uid" value="<?php echo $currentuser['user_id'] ?>">

                    <div class="form-group">
                        <label for="postSubject">Subject</label>
                        <input type="text" class="form-control" id="postSubject" placeholder="Enter post subject">
                    </div>
                    <div class="form-group">
                        <label for="postContent">Content</label>
                        <textarea class="form-control" rows="5" id="postContent"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="submitPost">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
