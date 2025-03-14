<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form buku tamu</title>
</head>

<body>
    <div class="container"><br>
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Form Pengunjung</h2><hr>
                <form method="post" action="kunjungan.php">
                        <div class="form-group row">
                            <label for="fullname" class="col-4 col-form-label">Name</label>
                            <div class="col-8">
                                <input id="fullname" name="fullname" type="text" class="form-control" required="required" placeholder="enter name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-4 col-form-label">Email</label>
                            <div class="col-8">
                                <input id="email" name="email" placeholder="example@gmail.com" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="message" class="col-4 col-form-label">Message</label>
                            <div class="col-8">
                                <input id="message" name="message" type="text" class="form-control" required="required" placeholder="enter message">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </form>
            </div>
        </div>
    </div>

</body>

</html>