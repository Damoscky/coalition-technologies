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
                <form method="" action="#">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="productName">Product Name</label>
                            <input type="text" class="form-control" id="productName" placeholder="" required>
                            
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="quantity">Quantity</label>
                            <input type="text" class="form-control" id="quantity" placeholder="" required>
                            
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" placeholder="" required>
                            
                        </div>

                        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>

                        <br> <br>
                    </div>
                    
                </form>

                <hr class="mb-4">

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
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>