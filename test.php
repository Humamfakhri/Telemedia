<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        .tooltip-inner{
            color: black;
            background: -webkit-gradient(linear, left top, left 25, from(#f7f7f7), color-stop(4%, #f7f7f7), to(#f7f7f7));
            border: 2px solid #dfdfdf;
            border-radius: 2px;
        }
    </style>
</head>
<body>
<div class="container">
    <h3>Tooltip with HTML demo</h3>
    <br /><br /><br /><br />
    <a class="btn btn-outline-success" data-toggle="tooltip" data-html="true" data-placement="bottom"
       title="Website Toko Online<br>Paket Medium<br>
              <a>Rp2.000.000</a>">
    Tooltip with custom scheme
    </a>

</div>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>

