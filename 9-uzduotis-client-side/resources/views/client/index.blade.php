<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Client Side</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Styles -->


</head>

<body>
    <div class="container">
        <table id="clients" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Client Name</th>
                    <th>Client Lastname</th>
                    <th>Client description</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>


    <script>
        $(document).ready(function() {
            console.log('Hi');
            $.ajax({
                type: 'GET',
                url: 'http://127.0.0.1:8000/api/clients',
                success: function(data) {
                    console.log(data);
                }
            })
        })
    </script>
</body>

</html>