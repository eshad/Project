<?php $counter = 1; ?>
<?php $counter1 = 1; ?>
<?php $counter2 = 1; ?>
<?php $counter3 = 1; ?>
<?php
if (isset($_POST['enter'])) {
    $colorpicker = $_POST['colorpicker'];
}
?>
<div class="content">
    <div class="container-fluid">
        <div class = "row">

            <div class="col-md-4">
                <div class="card" style = "padding: 30px">
                    <div class="header">
                        <h4 class="title"><b>Edit Sliding Images</b></h4>
                    </div>
                    </br>    
                    <form action = "<?= $this->config->base_url() ?>Settings/edit_images/" method = "POST" enctype = "multipart/form-data">
                        <div class = "col-md-12">
                            Image 1
                            <div id="filediv"><input name="user_file[]" type="file" id="file"/></div></br>
                            <?php
                            if (validation_errors()):
                                echo "<span style = 'color: red'>" . form_error("user_file[]") . "</span>";
                            endif;
                            ?>
                        </div>

                        <div class = "col-md-12">
                            Image 2
                            <div id="filediv"><input name="user_file[]" type="file" id="file"/></div><br>
                            <?php
                            if (validation_errors()):
                                echo "<span style = 'color: red'>" . form_error("user_file[]") . "</span>";
                            endif;
                            ?>
                        </div>

                        <div class = "col-md-12">
                            Image 3
                            <div id="filediv"><input name="user_file[]" type="file" id="file"/></div><br>
                            <?php
                            if (validation_errors()):
                                echo "<span style = 'color: red'>" . form_error("user_file[]") . "</span>";
                            endif;
                            ?>
                        </div>


                        <div align = "left">                            
                            <button type="submit" class="btn btn-info btn-fill btn-wd" style = "background-color: #31bbe0; border-color: #31bbe0; color: white;">Edit Picture Slider</button>
                        </div>

                    </form>

                </div>   
            </div>

            

            <div class="col-md-4">
                <div class="card" style = "padding: 30px">
                    <div class="header">
                        <h4 class="title"><b>Edit Company  Logo</b></h4>
                    </div>
                    </br>    
                    <form action = "<?= $this->config->base_url() ?>Settings/edit_logo/" method = "POST" enctype = "multipart/form-data">
                        <div class = "col-md-12">
                            Image 1
                            <div id="filediv"><input name="user_file[]" type="file" id="file"/></div></br>
                            <?php
                            if (validation_errors()):
                                echo "<span style = 'color: red'>" . form_error("user_file[]") . "</span>";
                            endif;
                            ?>
                        </div>

                        


                        <div align = "left">                            
                            <button type="submit" class="btn btn-info btn-fill btn-wd" style = "background-color: #31bbe0; border-color: #31bbe0; color: white;">Edit Company Logo</button>
                        </div>

                    </form>

                </div>   
            </div>
            
             <div class="col-md-4">
                <div class="card" style = "padding: 30px">
                    <div class="header">
                        <h4 class="title"><b>Edit Company  Logo Icon </b></h4>
                    </div>
                    </br>    
                    <form action = "<?= $this->config->base_url() ?>Settings/edit_logo_icon/" method = "POST" enctype = "multipart/form-data">
                        <div class = "col-md-12">
                            Image 1
                            <div id="filediv"><input name="user_file[]" type="file" id="file"/></div></br>
                            <?php
                            if (validation_errors()):
                                echo "<span style = 'color: red'>" . form_error("user_file[]") . "</span>";
                            endif;
                            ?>
                        </div>

                        


                        <div align = "left">                            
                            <button type="submit" class="btn btn-info btn-fill btn-wd" style = "background-color: #31bbe0; border-color: #31bbe0; color: white;">Edit Company Logo Icon</button>
                        </div>

                    </form>

                </div>   
            </div>
        </div>


    </div>

    <div class = "row">
        <div class = "col-md-3">
            <div class="card" style = "padding: 30px">
                <h4 class="title"><b>Brands</b></h4>
                <br>
                <div align = "left">
                    <a href = "<?= $this->config->base_url() ?>Settings/add_brand" class="btn btn-info btn-fill" style="background-color: #31bbe0; border-color: #31bbe0; color: white;" title = "Insert new category">Add Brand</a>

                    <?php
                    if (!$brand) {
                        echo "<center><h3><hr><br>There are no products recorded in the database.</h3><br></center><br><br>";
                    } else {
                        ?>
                        <table class="table table-striped">
                            <thead>
                            <th><b>#</b></th>
                            <th><b>Brand Name</b></th>
                            <th><b>Actions</b></th>
                            </thead>
                            <tbody>
                                <?php foreach ($brand as $brand): ?>
                                    <tr>
                                        <td><?= $counter1++ ?></td>
                                        <td><?= $brand->brand_name ?></td>
                                        </td>    
                                        <td>

                                            <a class="btn btn-warning" href="<?= $this->config->base_url() ?>Settings/edit_brand/<?= $brand->brand_id ?>" title = "Edit Category" alt = "Edit Category">
                                                <span class="ti-pencil"></span>
                                            </a>
                                            <a class="btn btn-danger delete" href="#" data-id="<?= $brand->brand_id ?>" title = "Delete Brand" alt = "Delete Brand">
                                                <span class="ti-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <?php
                        echo "<div align = 'center'>" . "</div>";
                    }
                    ?> </div>
            </div>
        </div>   

        <div class="col-md-3">
            <div class="card" style = "padding: 30px">
                <h4 class="title"><b>Categories</b></h4>
                <br>
                <div align = "left">
                    <a href = "<?= $this->config->base_url() ?>Settings/add_category" class="btn btn-info btn-fill" style="background-color: #31bbe0; border-color: #31bbe0; color: white;" title = "Insert new category">Add Category</a>

                    <?php
                    if (!$category) {
                        echo "<center><h3><hr><br>There are no products recorded in the database.</h3><br></center><br><br>";
                    } else {
                        ?>

                        <table class="table table-striped">
                            <thead>
                            <th><b>#</b></th>
                            <th><b>Category Name</b></th>
                            <th><b>Actions</b></th>
                            </thead>
                            <tbody>
                                <?php foreach ($category as $category): ?>
                                    <tr>
                                        <td><?= $counter2++ ?></td>
                                        <td><?= $category->category ?></td>
                                        </td>    
                                        <td>

                                            <a class="btn btn-warning" href="<?= $this->config->base_url() ?>Settings/edit_category/<?= $category->category_id ?>" title = "Edit Category" alt = "Edit Category">
                                                <span class="ti-pencil"></span>
                                            </a>
                                            <a class="btn btn-danger delete" href="#" data-id="<?= $category->category_id ?>" title = "Delete Category" alt = "Delete Category">
                                                <span class="ti-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <?php
                        echo "<div align = 'center'>" . "</div>";
                    }
                    ?> </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card" style = "padding: 30px">
                <h4 class="title"><b>Shippers</b></h4>
                <br>
                <div align = "left">
                    <a href = "<?= $this->config->base_url() ?>Settings/add_shipper" class="btn btn-info btn-fill" style="background-color: #31bbe0; border-color: #31bbe0; color: white;" title = "Insert new shipper">Add Shipper</a>

                    <?php
                    if (!$shipper) {
                        echo "<center><h3><hr><br>There are no products recorded in the database.</h3><br></center><br><br>";
                    } else {
                        ?>

                        <table class="table table-striped">
                            <thead>
                            <th><b>#</b></th>
                            <th><b>Shipper Name</b></th>
                            <th><b>Actions</b></th>
                            </thead>
                            <tbody>
                                <?php foreach ($shipper as $shipper): ?>
                                    <tr>
                                        <td><?= $counter3++ ?></td>
                                        <td><?= $shipper->shipper_name ?></td>
                                        </td>    
                                        <td>

                                            <a class="btn btn-warning" href="<?= $this->config->base_url() ?>Settings/edit_shipper/<?= $shipper->shipper_id ?>" title = "Edit Shipper" alt = "Edit Shipper">
                                                <span class="ti-pencil"></span>
                                            </a>
                                            <a class="btn btn-danger delete" href="#" data-id="<?= $shipper->shipper_id ?>" title = "Delete Category" alt = "Delete Category">
                                                <span class="ti-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <?php
                        echo "<div align = 'center'>" . "</div>";
                    }
                    ?> </div>
            </div>
        </div>

        <div class = "col-md-3">
            <div class ="card" style = "padding: 30px">
                <h4 class="title"><b>Suppliers</b></h4>
                <br>

                <div align = "left">
                    <a href = "<?= $this->config->base_url() ?>Settings/add_supplier" class="btn btn-info btn-fill" style="background-color: #31bbe0; border-color: #31bbe0; color: white;" title = "Insert new supplier">Add Supplier</a>

                    <?php
                    if (!$supplier) {
                        echo "<center><h3><hr><br>There are no products recorded in the database.</h3><br></center><br><br>";
                    } else {
                        ?>

                        <table class="table table-striped">
                            <thead>
                            <th><b>#</b></th>
                            <th><b>Supplier Name</b></th>
                            <th><b>Actions</b></th>
                            </thead>
                            <tbody>
                                <?php foreach ($supplier as $supplier): ?>
                                    <tr>
                                        <td><?= $counter++ ?></td>
                                        <td><?= $supplier->company_name ?></td>
                                        </td>    
                                        <td>

                                            <a class="btn btn-warning" href="<?= $this->config->base_url() ?>Settings/edit_supplier/<?= $supplier->supplier_id ?>" title = "Edit Supplier" alt = "Edit Supplier">
                                                <span class="ti-pencil"></span>
                                            </a>
                                            <a class="btn btn-danger delete" href="#" data-id="<?= $supplier->supplier_id ?>" title = "Delete Supplier" alt = "Delete Supplier">
                                                <span class="ti-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <?php
                        echo "<div align = 'center'>" . "</div>";
                    }
                    ?> </div>
            </div>
        </div>            
    </div>





    <form action = "<?= $this->config->base_url() ?>Settings/add_color_admin"  method = "POST" enctype = "multipart/form-data">
        <div class = "row">
            <div class = "col-md-3">
            <div class="card" style = "padding: 30px">
                <h4 class="title"><b>Edit Heading Color for Admin</b></h4>
                <br>


                <select name="colorpicker" value = "<?= $colorpicker ?>">
                    <option value="#7bd148">Green</option>
                    <option value="#5484ed">Bold blue</option>
                    <option value="#a4bdfc">Blue</option>
                    <option value="#46d6db">Turquoise</option>
                    <option value="#7ae7bf">Light green</option>
                    <option value="#51b749">Bold green</option>
                    <option value="#fbd75b">Yellow</option>
                    <option value="#ffb878">Orange</option>
                    <option value="#ff887c">Red</option>
                    <option value="#dc2127">Bold red</option>
                    <option value="#dbadff">Purple</option>
                    <option value="#e1e1e1">Gray</option>
                    <option value="#595959">Black</option>
                </select>

                <button type="submit" class="btn btn-info btn-fill btn-wd" style = "background-color: #31bbe0; border-color: #31bbe0; color: white;" name = "enter">Enter</button>
                </div>
            </div>
    </form>

        <form action = "<?= $this->config->base_url() ?>Settings/add_color_customer"  method = "POST" enctype = "multipart/form-data">
        <div class = "row">
            <div class = "col-md-3">
            <div class="card" style = "padding: 30px">
                <h4 class="title"><b>Edit Heading Color for Customer</b></h4>
                <br>


                <select name="colorpicker" value = "<?= $colorpicker ?>">
                    <option value="#7bd148">Green</option>
                    <option value="#5484ed">Bold blue</option>
                    <option value="#a4bdfc">Blue</option>
                    <option value="#46d6db">Turquoise</option>
                    <option value="#7ae7bf">Light green</option>
                    <option value="#51b749">Bold green</option>
                    <option value="#fbd75b">Yellow</option>
                    <option value="#ffb878">Orange</option>
                    <option value="#ff887c">Red</option>
                    <option value="#dc2127">Bold red</option>
                    <option value="#dbadff">Purple</option>
                    <option value="#e1e1e1">Gray</option>
                    <option value="#595959">Black</option>
                </select>

                <button type="submit" class="btn btn-info btn-fill btn-wd" style = "background-color: #31bbe0; border-color: #31bbe0; color: white;" name = "enter">Enter</button>
                </div>
            </div>
    </form>

    <div align = "left">
        <a href = "<?= $this->config->base_url() ?>Settings/database_backup" class="btn btn-info btn-fill" style = "background-color: #31bbe0; border-color: #31bbe0; color: white;" title = "Export Database">Backup Database</a>
    </div>
</div>
</div>










<script>
    $(".delete").click(function () {
        var id = $(this).data('id');

        swal({
            title: "Are you sure you want to delete this category?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "<?= $this->config->base_url() ?>Settings/delete_category/" + id;
                    } else {
                        swal("The category is safe!");
                    }
                });
    });
</script>


<script>
    $(".delete").click(function () {
        var id = $(this).data('id');

        swal({
            title: "Are you sure you want to delete this brand?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "<?= $this->config->base_url() ?>Settings/delete_brand/" + id;
                    } else {
                        swal("The brand is safe!");
                    }
                });
    });
</script>



<script>
    $(".delete").click(function () {
        var id = $(this).data('id');

        swal({
            title: "Are you sure you want to delete this supplier?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "<?= $this->config->base_url() ?>Settings/delete_supplier/" + id;
                    } else {
                        swal("The supplier is safe!");
                    }
                });
    });
</script>

<script>
    $(".delete").click(function () {
        var id = $(this).data('id');

        swal({
            title: "Are you sure you want to delete this shipper?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "<?= $this->config->base_url() ?>Settings/delete_shipper/" + id;
                    } else {
                        swal("The shipper is safe!");
                    }
                });
    });
</script>

<script src="<?= $this->config->base_url() ?>assets/paper/js/jquery.simplecolorpicker.js" ></script>

<script>
    $('select[name="colorpicker"]').simplecolorpicker({
        picker: true,
        theme: 'fontawesome'
    });
</script>