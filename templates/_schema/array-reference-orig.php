<?php foreach($entries as $entry): ?>
    <?php
    if (is_callable($self->get('foreignLabel'))) {
        $getLabel = $self->get('foreignLabel');
        $label = $getLabel($entry);
    } else {
        $label = $entry[$self->get('foreignLabel')];
    }

    ?>
        <label class="col-sm-3 control-label no-padding-right"></label>
        <div class="col-sm-9">
            <div class="checkbox">
                <label>
                    <input
                        class="ace"
                        type="checkbox"
                        name="<?php echo $self['name'] ?>[]"
                        value="<?php echo $entry['$id'] ?>"
                        <?php echo (in_array($entry['$id'], $value) ? 'checked' : '') ?>
                    />
                    <span class="lbl">
                        <?php echo $label ?>
                    </span>
                </label>
                
            </div>
        </div>
<?php endforeach; ?>