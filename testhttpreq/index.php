<!DOCTYPE html>
<html>

<head>
    <title>Live Data Search with Pagination in PHP using Ajax</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
</head>

<body>
    <br />
    <div class="container">
        <h3 align="center">Live Data Search with Pagination in PHP Mysql using Ajax</h3>
        <br />
        <div class="card">
            <form action="trunggian.php" method="POST">
                <div class="card-header">Dynamic Data</div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="search_box" id="search_box" class="form-control" placeholder="Type your search query here" />
                    </div>
                    <button type="submit"></button>
                </div>
            </form>
            <div class="table-responsive" id="dynamic_content">

            </div>
        </div>
    </div>
    <script>
        id_numbers = new Array();
        $.ajax({
            url: "timkiem.php",
            type: "POST",
            dataType: "json",
            success: function(response) {
                response = JSON.parse(response);
                console.log("Product id is: " + response[0].newId);
                console.log("Product name is: " + response[0].newName);
                console.log("Product date: " + response[0].newDate);
            }
        });
    </script>
</body>

</html>