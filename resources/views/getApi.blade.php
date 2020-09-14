<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

<div class="container mt-1">
    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="{{$user->avatar_url}}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
              </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="{{$user->html_url}}">Home <span class="sr-only">(current)</span></a>
                    </li>
            </div>
        </nav>
    </section>

    <section class="body">
        <section class="main">

        </section>
        <section class="content mt-1">
            <div class="card">
                <div class="card-header text-center">
                    Hay {{$user->login}}
                  </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <img style="height:auto;" alt="" width="260" height="260" class="avatar avatar-user width-full border bg-white" src="{{$user->avatar_url}}">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col">
                        <table align="center">
                            <tbody>
                                <tr>
                                    <th>Company Name</th>
                                    <td>:</td>
                                    <td>{{$user->company}}</td>
                                </tr>
                                <tr>
                                    <th>Blog</th>
                                    <td>:</td>
                                    <td>{{$user->blog}}</td>
                                </tr>
                                <tr>
                                    <th>Location</th>
                                    <td>:</td>
                                    <td>{{$user->location}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>:</td>
                                    <td>{{$user->email}}</td>
                                </tr>
                                <tr>
                                    <th>Bio</th>
                                    <td>:</td>
                                    <td>{{$user->bio}}</td>
                                </tr>
                                <tr>
                                    <th>Twitter</th>
                                    <td>:</td>
                                    <td>{{$user->twitter_username}}</td>
                                </tr>
                                <tr>
                                    <th>Followers</th>
                                    <td>:</td>
                                    <td>{{$user->followers}}</td>
                                </tr>
                                <tr>
                                    <th>Following</th>
                                    <td>:</td>
                                    <td>{{$user->following}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

              </div>
        </section>
    </section>

    <section class="footer">

    </section>
</div>
    <script src="{{asset('jquery.js')}}"></script>
    <script src="{{asset('popper.js')}}"></script>
    <script src="{{asset('bootstrap.js')}}"></script>
</body>

</html>
