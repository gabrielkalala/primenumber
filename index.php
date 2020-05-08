<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>index</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" />
    <link rel="stylesheet" href="dist/css/Header-Blue.css" />
    <link rel="stylesheet" href="dist/css/Header-Dark.css" />
    <link rel="stylesheet" href="dist/css/styles.css" />
</head>

<body style="background-color: rgb(219,220,231);font-size: 14px;">
    <header></header>
    <div>
        <div class="header-blue" style="height: 70px;">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
                <div class="container-fluid"><a class="navbar-brand" href="#">Prime Number</a></div>
            </nav>
        </div>
    </div>
    <section class="col-lg-8 offset-lg-2">
        <div style="padding: 15px;padding-top: 50px;">
            <div class="card">
                <div class="card-body" style="width: 500;">
                    <div class="row">
                        <h4 class="card-title" style="margin-bottom: 50px;">Enter the number</h4>
                    </div>
                    <form id="numberForm" class="form-group row" action="primenumber.php" method="post">

                        <div class="form-group">
                            <div class="form-row">
                                <div class="row">
                                    <div class="col-lg-4"><label class="col-form-label form-control">Number :</label></div>
                                    <div class="col-lg-8"><input type="number" class="border rounded form-control " name="primenumber" placeholder="enter the number" min="1" required style="padding: 0px;padding-left: 8px;margin-left: 0px;width: 250px;" /></div>
                                </div>
                                <button class="btn btn-primary border rounded" type="submit" style="margin-top: 30px;margin-left: 200px;font-style: normal;">Test</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer></footer>
</body>

</html>