<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <h1>Products</h1>
        <button class="btn btn-primary btnAdd float-end">Add Product</button>
        <table class="table table-hover align-middle text-center " style="table-layout: fixed;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>QTY</th>
                    <th>Total</th>
                    <th>Discount</th>
                    <th>Payment</th>
                    <th>Thumbnail</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php include 'function.php';
                selectProduct();
            ?>
            </tbody>
        </table>
    </div>
    <div class="modals container-fluid">
        <form action="" method="post" enctype="multipart/form-data">
            <h2 class="text-center">Add Product</h2>
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="price" class="form-label mt-2">Price</label>
                <input type="text" name="price" id="price" class="form-control">
            </div>
            <div class="form-group">
                <label for="qty" class="form-label mt-2">QTY</label>
                <input type="text" name="qty" id="qty" class="form-control">
            </div>
            <div class="form-group">
                <label for="thumbnail" class="form-label mt-2">Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" name="btnSave" class="btn mt-4 me-2 btn-primary">Save</button>
                <button type="button" class="btn mt-4 me-2 btn-danger btnCancel">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>

<script>
    $(document).ready(function(){
        $('.btnAdd').click(function(){
            $('.modals').slideDown(500);
        })
        $('.btnCancel').click(function(){
            $('.modals').slideUp(500);
        })
    })
</script>