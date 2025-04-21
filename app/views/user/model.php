
    <div class="container">

        <div class="row">

            <!--Add New Model-->
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h2>Add New Model</h2>
                </div>

                <div class="panel-body">

                    <form method="POST">

                        <div class="form-group">
                            <label>Model Name *</label>
                            <input type="text" class="form-control" name="model_name" required="required" />
                        </div>
        
                        <div class="form-group">
                            <label>Model Description *</label>
                            <textarea name="model_description" class="form-control"></textarea>
                        </div>

                        <button name="add" class="btn btn-default">Submit</button>

                    </form>

                </div>

            </div>

            <!--Already Have the Models-->
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h2>Pervious Model</h2>
                </div>

                <div class="panel-body">

                    <table class="table">

                        <tr>
                            <th>Model ID</th>
                            <th>Model Name</th>
                            <th>Traning</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>


                        <?php if (!empty($models)) : ?>
                        <?php foreach ($models as $model) : ?>
                            <tr>
                                <td><?php echo $model['model_id']; ?></td>
                                <td><?php echo $model['model_name']; ?></td>
                                <td><a href="#">Train</a></td>
                                <td><a href="#">Edit</a></td>
                                <td><a href="#">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                        <?php else : ?>
                            <tr><td colspan="5">No models found.</td></tr>
                        <?php endif; ?>

                    </table>

                </div>

            </div>

        </div>

    </div>