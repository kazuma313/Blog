<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href={{ asset("css/Admin/styles.css") }} rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href= {{ asset("css/Admin/trix.css") }}>
    <script type="text/javascript" src={{ asset("js/Admin/trix.js") }}></script>

    <style>
        .trix-button-group--file-tools {
            display: none !important;
        }

    </style>
</head>



@yield('isi')



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<script src={{ asset("js/Admin/scripts.js") }}></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src={{ asset("assets/demo/chart-area-demo.js") }}></script>
<script src={{ asset("assets/demo/chart-bar-demo.js") }}></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src={{ asset("js/datatables-simple-demo.js") }}></script>

</body>

</html>
