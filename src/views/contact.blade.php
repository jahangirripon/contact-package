<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/spacelab/bootstrap.min.css">
    <style>
            .jumbotron {
                background: #358CCE;
                color: #FFF;
                border-radius: 0px;
                }
                .jumbotron-sm { padding-top: 24px;
                padding-bottom: 24px; }
                .jumbotron small {
                color: #FFF;
                }
                .h1 small {
                font-size: 24px;
                }
    </style>
</head>
<body>  
        <div class="jumbotron jumbotron-sm">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <h1 class="h1">
                            Contact us <small>Feel free to contact us</small></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="well well-sm">
                        <form action="{{ route('contact') }}" method="POST">
                            {{ csrf_token() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter name" required="required" />
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                        <input type="email" class="form-control" name="email" placeholder="Enter email" required="required" /></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Message</label>
                                    <textarea name="message" name="message" class="form-control" rows="9" cols="25" required="required"
                                        placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" value="submit" class="btn btn-success">
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                {{--  <div class="col-md-4">
                    <form>
                    <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                    <address>
                        <strong>Twitter, Inc.</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">
                            P:</abbr>
                        (123) 456-7890
                    </address>
                    <address>
                        <strong>Full Name</strong><br>
                        <a href="mailto:#">first.last@example.com</a>
                    </address>
                    </form>
                </div>  --}}
            </div>
        </div>
        
</body>
</html>