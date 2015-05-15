<div class="page-header">
    <h1><?php echo f('controller.name') ?> (<?php echo $entry->format() ?>)</h1>
</div>

<form class="form-horizontal" method="post" role="form">
    <p>
    </p>

    <?php foreach(f('app')->controller->schema() as $name => $field): ?>
        <?php if (!$field['hidden']): ?>
        <div class="form-group">
            <?php echo $field->label() ?>

            <?php echo $field->format('readonly', @$entry[$name], @$entry) ?>

        </div>
        <?php endif ?>

    <?php endforeach ?>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
	        <a href="<?php echo f('controller.url', '/:id/update') ?>" class="btn btn-primary"><i class="fa fa-edit">&emsp;</i>Update</a>
	        <a href="<?php echo f('controller.url', '/:id/delete') ?>" class="btn btn-danger"><i class="fa fa-trash">&emsp;</i>Delete</a>
        </div>
    </div>


</form>