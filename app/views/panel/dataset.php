
    <div class="dashboard-content">

        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>Create New Dataset</h1>
            </div>

            <div class="panel-body">

                <form method="POST">

                        <div class="form-group">
                            <label>DataSet Name *</label>
                            <input type="text" name="data_set" class="form-control" required="required" />
                        </div>

                        <div class="form-group">
                            <label>DataSet Description *</label>
                            <textarea name="dataset_descrption" class="form-control"></textarea>
                        </div>

                        <button name="btn" class="btn btn-default">Create</button>

                </form>

            </div>            

        <div>

        <!--User Models-->
                <?php if(!empty($models)): ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Dataset Name</th>
                                <th>Description</th>
                                <th>Code</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($models as $model): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($model['set_name']); ?></td>
                                    <td><?php echo htmlspecialchars($model['set_description']); ?></td>
                                    <td><?php echo htmlspecialchars($model['code']); ?></td>
                                    <td>
                                        <!-- Add actions (e.g., view, edit, delete) -->
                                        <a href="<?= base_url()?>data_set/<?= $model['code']?>" class="btn btn-info">View</a>
                                        <button class="btn btn-warning">Edit</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p>No datasets available.</p>
                <?php endif; ?>


    </div>