<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Comment</title>
    <link rel="stylesheet" href="comments.css">
</head>
<body>
    <div class="comment-section">
        <h3 class="section-title">Leave a Comment</h3>
        <form action="post_comment.php" method="POST">
            <input type="text" name="name" class="form-input" placeholder="Your Name" required>
            <textarea name="comment" class="form-textarea" rows="4" placeholder="Write your comment here..." required></textarea>
            <button type="submit" class="form-button">Post Comment</button>
        </form>
    </div>
    
    <div class="comments">
        <h3 class="section-title">Comments</h3>
        <div class="comment-list">
            <?php include 'get_comments.php'; ?>
        </div>
    </div>
</body>
</html>
