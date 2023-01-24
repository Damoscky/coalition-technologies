
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coalition Assessment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <h4 class="mb-3">Product Information</h4>
                <h4 id="response"></h4>
                <form id="submitData"  method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="productName">Product Name</label>
                            <input type="text" class="form-control" name="product_name" id="productName" placeholder="" required>
                            
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="quantity">Quantity</label>
                            <input type="number" class="form-control" name="quantity" id="quantity" placeholder="" required>
                            
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" name="price" id="price" placeholder="" required>
                        </div>

                        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>

                        <br> <br>
                    </div>
                    
                </form>

                <hr class="mb-4">

                <div id="result"></div>

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price Per Item</th>
                        <th scope="col">Date Submited</th>
                        <th scope="col">Total value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Test product</td>
                            <td>2</td>
                            <td>$400</td>
                            <td>2023-25-01</td>
                            <td>$800</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).on('submit','#submitData',function(e){
                e.preventDefault();
                $.ajax({
                method:"POST",
                url: "process-data.php",
                data:$(this).serialize(),
                success: function(data){
                    alert("Great!: " + data);
                }
            });
        });
    </script>
</body>
</html>