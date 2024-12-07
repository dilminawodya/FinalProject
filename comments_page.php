<?php
        include 'db_connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Comment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="comment-section">
        <h3>Leave a Comment</h3>
        <form action="post_comment.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <textarea name="comment" rows="4" placeholder="Write your comment here..." required></textarea>
            <button type="submit">Post Comment</button>
        </form>
    </div>
    
    <div class="comments">
        <h3>Comments</h3>
        <?php include 'get_comments.php'; ?>
    </div>
</body>
</html>
