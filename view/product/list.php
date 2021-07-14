

<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            The list of ĐỒ UỐNG
        </div>
        <div class="card-body">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  foreach ($products as $key => $product): ?>
                    <tr>
                        <td><?php echo $key+1 ?></td>
                        <td><?php echo $product->name ?></td>
                        <td><?php echo $product->category ?></td>
                        <td>
                            <a href="index.php?page=edit&id=<?php echo $product->id?>" class="btn btn-primary btn-sm">Update</a>
                            <a href="index.php?page=delete&id=<?php echo $product->id?>" class="btn btn-primary btn-sm">Delete</a>
                        </td>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
