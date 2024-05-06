<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PeaceHub</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/sass/blog.scss', 'resources/js/app.js']);

</head>

<body>
    <section class="section-1">
        <header id="header">
            <div class="logo" style="cursor: pointer;">PEACE
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20"
                    fill="white">
                    <path
                        d="M288 167.2v-28.1c-28.2-36.3-47.1-79.3-54.1-125.2-2.1-13.5-19-18.8-27.8-8.3-21.1 24.9-37.7 54.1-48.9 86.5 34.2 38.3 80 64.6 130.8 75.1zM400 64c-44.2 0-80 35.9-80 80.1v59.4C215.6 197.3 127 133 87 41.8c-5.5-12.5-23.2-13.2-29-.9C41.4 76 32 115.2 32 156.6c0 70.8 34.1 136.9 85.1 185.9 13.2 12.7 26.1 23.2 38.9 32.8l-143.9 36C1.4 414-3.4 426.4 2.6 435.7 20 462.6 63 508.2 155.8 512c8 .3 16-2.6 22.1-7.9l65.2-56.1H320c88.4 0 160-71.5 160-159.9V128l32-64H400zm0 96.1c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16z" />
                </svg>
                HUB
            </div>


            <nav>
                <ul>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>

                    @auth('student')
                        <li class="dropdown">
                            <a class="nav-item dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Blog
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                {{-- <a class="dropdown-item"style="color: black"  href="">View Posts</a> --}}
                                <a class="dropdown-item" id="createPostLink" href=""style="color: black">Create
                                    Post</a>
                                <a class="dropdown-item" id=""
                                    href="{{ route('post.index') }}"style="color: black">My
                                    Posts</a>
                            </div>
                        </li>
                    @endauth

                </ul>
            </nav>

            @auth('student')
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link" href=""
                        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fas fa-door" style=""></i>
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('user logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            @else
                <a href="{{ route('loginpage') }}" id="loginBtn" class="signin-btn">Sign In</a>
            @endauth

        </header>

        <div class="text">PeaceHub <br>Blog <br>

        </div>

    </section>

    @forelse ($posts as $post)
        <section class="blog">
            <div class="container">
                <div class="blog-card">
                    <div class="header">
                        <div class="avatar">
                            <img src="user-avatar.jpg" alt="User Avatar">
                        </div>

                        <div class="user-details">
                            <h3 class="username">{{ $post->student->username }}</h3>
                            <span class="date">{{ $post->created_at }}</span>
                        </div>
                    </div>
                    <div class="content">
                        <a href="{{ route('post.show',$post->id) }}"><h4 class="title">{{ $post->title }}.</h4></a>
                        <p class="description">{{ $post->content }}.</p>
                    </div>
                    <div class="actions">
                        <a href="" class="icon like">
                            <i class="fas fa-thumbs-up" style="color: blue"></i>
                            <span class="count">10</span>
                        </a>
                        <a href="" class="icon comment" style="color: black" data-toggle="modal"
                            data-target="#commentModal" data-post-id="{{ $post->id }}">
                            <i class="fas fa-comment"></i>
                            <span class="count">{{ $post->comments()->count() }}
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @empty
    @endforelse


    <!-- Font Awesome Icons -->


    <footer>
        <div class="footer-row">
            <div class="foot-col foot-1">
                <h1>PEACE<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="25" height="30"
                        fill="white">
                        <path
                            d="M288 167.2v-28.1c-28.2-36.3-47.1-79.3-54.1-125.2-2.1-13.5-19-18.8-27.8-8.3-21.1 24.9-37.7 54.1-48.9 86.5 34.2 38.3 80 64.6 130.8 75.1zM400 64c-44.2 0-80 35.9-80 80.1v59.4C215.6 197.3 127 133 87 41.8c-5.5-12.5-23.2-13.2-29-.9C41.4 76 32 115.2 32 156.6c0 70.8 34.1 136.9 85.1 185.9 13.2 12.7 26.1 23.2 38.9 32.8l-143.9 36C1.4 414-3.4 426.4 2.6 435.7 20 462.6 63 508.2 155.8 512c8 .3 16-2.6 22.1-7.9l65.2-56.1H320c88.4 0 160-71.5 160-159.9V128l32-64H400zm0 96.1c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16z" />
                    </svg>HUB</h1>
                <p>We are mental health experienced therapists that are passionate on our goal on empowering you
                    mentally with our wellness Journey</p>
                <input type="text" placeholder="Enter your Address for New Letter">
            </div>
            <div class="foot-col foot-2">
                <div>
                    <a href=""> About Us</a>
                    <a href=""> Stories</a>
                    <a href=""> Carrier</a>
                    <a href=""> Testimonies</a>
                </div>
                <p> Copyright &copy; PeaceHub 2024
                </p>
            </div>
            <div class="foot-col foot-3">
                <div>
                    <a href="">FAQ</a>
                    <a href=""> Prices</a>
                    <a href=""> Policy</a>
                    <a href=""> Support</a>
                </div>
            </div>
            <div class="foot-col foot-4">
                <div>
                    <a href=""> Phone</a>
                    <a href=""> Email</a>
                    <a href=""> Location</a>
                    <a href=""> Socials</a>
                </div>
                <div><a href="#header">Back To Top</a></div>
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="createPostModal" tabindex="-1" aria-labelledby="createPostModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="color: white;background-color: blue">
                    <div class="modal-header border-bottom-0">
                        <div class="d-flex align-items-center">
                            <h5 class="modal-title mb-0">PEACE<svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" width="24" height="24" fill="white"
                                    class="m-1">
                                    <path
                                        d="M288 167.2v-28.1c-28.2-36.3-47.1-79.3-54.1-125.2-2.1-13.5-19-18.8-27.8-8.3-21.1 24.9-37.7 54.1-48.9 86.5 34.2 38.3 80 64.6 130.8 75.1zM400 64c-44.2 0-80 35.9-80 80.1v59.4C215.6 197.3 127 133 87 41.8c-5.5-12.5-23.2-13.2-29-.9C41.4 76 32 115.2 32 156.6c0 70.8 34.1 136.9 85.1 185.9 13.2 12.7 26.1 23.2 38.9 32.8l-143.9 36C1.4 414-3.4 426.4 2.6 435.7 20 462.6 63 508.2 155.8 512c8 .3 16-2.6 22.1-7.9l65.2-56.1H320c88.4 0 160-71.5 160-159.9V128l32-64H400zm0 96.1c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16z" />
                                </svg>HUB CREATE POST</h5>
                        </div>

                    </div>
                    {{-- <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body">
                    <!-- Form to create a post goes here -->
                    <!-- Replace this with your actual form for creating a post -->
                    <form action="{{ route('post.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="postTitle">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Post Title">
                        </div>
                        <div class="form-group">
                            <label for="postContent">Content</label>
                            <textarea class="form-control" id="content" name="content" placeholder="Post Content" rows="3"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Post</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    {{-- modal 2 --}}
    <div class="modal fade" id="commentModal" tabindex="-1" role="dialog" aria-labelledby="commentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: blue;color:white">
                    <h5 class="modal-title" id="commentModalLabel">Add Comment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form to add comment -->
                    <form id="commentForm" method="POST" action="{{ route('comment.store') }}">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="post_id" id="post_id">
                            <label for="comment">Comment:</label>
                            <textarea class="form-control" id="comment content" name="content" rows="3" required></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" onclick="submitComment()">Submit</button>
                        </div>
                        <!-- Add any additional form fields as needed -->
                    </form>
                </div>
                
            </div>
        </div>
    </div>




    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#createPostLink').click(function(e) {
                e.preventDefault();
                $('#createPostModal').modal('show');
            });
        });
    </script>

    <script>
        function submitComment() {
            var comment = document.getElementById('comment').value;
            console.log('New comment:', comment);
            $('#commentModal').modal('hide');
        }
    </script>

    <script>
        $('#commentModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); 
            var postId = button.data('post-id'); 
            var modal = $(this);
            modal.find('#post_id').val(postId); 
        });
    </script>



</body>

</html>
