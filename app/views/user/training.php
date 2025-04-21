
<div class="container">

    <div class="row">

        <!--Add New Model-->
        <div class="panel panel-default">

            <div class="panel-heading">
                <h2>Add New File</h2>
            </div>

            <div class="panel-body">

                <form method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Upload File *</label>
                        <input type="file" class="form-control" name="file" required="required" />
                    </div>

                    <div class="form-group">
                        <label>File Type *</label>
                        <select name="type" class="form-control">
                            <option value="yolo">YOLO (.txt)</option>
                            <option value="voc">VOC (.xml)</option>
                            <option value="xml">Plain XML (.xml)</option>
                            <option value="vgg">VGG (.json)</option>
                            <option value="json">Plain JSON (.json)</option>
                            <option value="csv">CSV (.csv)</option>
                            <option value="xls">Excel 97-2003 (.xls)</option>
                            <option value="xlsx">Excel (.xlsx)</option>
                        </select>
                    </div>

                    <button name="add" class="btn btn-default">Submit</button>

                </form>

            </div>

        </div>

    </div>

</div>