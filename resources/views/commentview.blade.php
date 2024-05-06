<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
            margin-top: 0;
        }
        .post-details {
            margin-top: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 20px;
        }
        .post-details p {
            margin: 10px 0;
            line-height: 1.6;
        }
        .post-details p span {
            font-weight: bold;
        }
        .comment-section {
            margin-top: 30px;
        }
        .comment {
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .comment p {
            margin: 5px 0;
        }
        .no-comment {
            font-style: italic;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Post Details</h1>
        <div class="post-details">
            <p><span>Title:</span> {{ $post->title }}</p>
            <p><span>Author:</span> {{ $post->student->username }}</p>
            <p><span>Date:</span> {{ $post->created_at }}</p>
            <p><span>Content:</span> {{ $post->content }}</p>
        </div>
        
        <div class="comment-section">
            <h2>Comments</h2>

            @forelse ($comments as $comment)
                <div class="comment">
                    <p><strong>{{ $comment->student->username }}</strong> replied:</p>
                    <p>{{ $comment->content }}</p>
                </div>
            @empty
                <p class="no-comment">No comments yet.</p>
            @endforelse
        </div>
    </div>
</body>
</html>
