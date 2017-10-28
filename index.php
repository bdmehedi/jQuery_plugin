<!doctype html>
<html lang="en">
  <head>
    <title>jQuery practice</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="margin: 10% auto">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h1 class="text-center">jQuery form submiting test</h1>
                    </div>
                    <div class="panel-body">
                    <hr>
                        <form action="action.php" method="post" class="ajax">
                            <div class="form-group">
                                <label for="username">User Name</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">User Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                        <div id="show_error"></div>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
        </div>  
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="jquery-3.1.1.min.js"></script>
    <script src="submit.js"></script>
    <script>
        $('form.ajax').formSubmit();
    </script>
  </body>
</html>