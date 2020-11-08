<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Lists</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body class="bg-dark">
    <div class="container">
    <div class="row">
    <h2 class="mx-auto text-white mb-4" >19330071-Luky - Product Lists</h2>
</div>
    <button type="button" class="add-button btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Add New</button>
 

    <div class="row">
            <?php foreach($products as $row):?>
                <div class="col-sm-4">
                <div class="article-card card bg-dark text-white mb-3 border-success" >
                <div class="card-header bg-transparent border-success"><?= $row->category;?>
                <a style="float:right;" class="btn-delete" href="#"  data-id="<?= $row->id_product;?>" >&#10006</a>
                <a style="float: right; margin-right: 10px;" class="btnEdit" href="#"
                data-id="<?= $row->id_product;?>"  data-description="<?= $row->description;?>" data-name="<?= $row->product_name;?>" data-price="<?= $row->price;?>" data-category="<?= $row->category;?>">&#9998</a>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $row->product_name;?></h5>
                    <p class="card-text" ><?= $row->description;?></p>     
                </div>
                    <div class="card-footer bg-transparent border-success">
                    <p class="card-text" > price:  Rp.<?= $row->price;?></p>  
                    </div>
            </div>
            </div>
            <?php endforeach;?>
    </div>
    
 
    </div>
    <a data-toggle="modal" data-target="#addModal" class="float">
        <img class="my-float" src="/icons/cross.svg" height="20" width="20" title="Add">
    
</a>
    <!-- Modal Add Product-->
    <form action="/products/save" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content bg-dark text-white  border-success">
            <div class="modal-header bg-transparent border-success">
                <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body border-success">
             
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="product_name" placeholder="Product Name">
                </div>
                 
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="price" placeholder="Product Price">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea type="text" class="form-control" name="description" placeholder="Product Description"></textarea>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" class="form-control" name="category" placeholder="Product Category">
                </div>
             
            </div>
            <div class="modal-footer border-success">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Add Product-->

        <!-- Modal Edit Product-->
        <form action="/products/update" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-dark text-white">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control product_name" name="product_name" placeholder="Product Name">
                </div>
                 
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control price" name="price" placeholder="Product Price">
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea type="text" class="form-control description" name="description" placeholder="Product Description"></textarea>
                </div>
 
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" class="form-control category" name="category" placeholder="Product Category">
                </div>
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id_product" class="id_product">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit Product-->
     <!-- Modal Delete Product-->
     <form action="/products/delete" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-danger text-white">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
               <h4>Are you sure want to delete this product?</h4>
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id_product" class="productID">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-danger">Yes</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Delete Product-->
 
 
<script src="<?= base_url('js/jquery-3.5.1.min.js')?>"></script>
<script src="<?= base_url('js/bootstrap.bundle.min.js')?>"></script>
<script>
    $(document).ready(function(){
 
        // get Edit Product
        $('.btnEdit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const name = $(this).data('name');
            const price = $(this).data('price');
            const description = $(this).data('description');
            const category = $(this).data('category');
            // Set data to Form Edit
            $('.id_product').val(id);
            $('.product_name').val(name);
            $('.description').val(description);
            $('.price').val(price);
            $('.category').val(category);
            // Call Modal Edit
            $('#editModal').modal('show');
        });
 
        // get Delete Product
        $('.btn-delete').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.productID').val(id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });
         
    });
</script>
</body>
</html>