<div class="page-header">
    <h1>Update <?php echo f('controller.name') ?> (<?php echo $entry->format() ?>)</h1>
</div>

<form class="form-horizontal" method="post" role="form">

    <?php foreach(f('app')->controller->schema() as $name => $field): ?>

    <?php if ($field['hidden']) continue ?>

    <div class="form-group">

        <?php echo $field->label() ?>

        <?php echo $field->format('input', @$entry[$name], @$entry) ?>

    </div>

    <?php endforeach ?>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit">
                <i class="ace-icon fa fa-check bigger-110"></i>
                Submit
            </button>

            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset">
                <i class="ace-icon fa fa-undo bigger-110"></i>
                Reset
            </button>
        </div>
    </div>

</form>