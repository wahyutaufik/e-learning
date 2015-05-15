<div class="col-sm-9">
	<select name="<?php echo $self['name'] ?>" data-value="<?php echo @$value ?>">
	    <option value="">---</option>
	    <?php foreach ($self->optionData() as $key => $entry): ?>
	        <option value="<?php echo $self->optionValue($key,$entry) ?>" <?php echo ($self->optionValue($key,$entry) == $value ? 'selected' : '') ?>>
	            <?php echo $self->optionLabel($key,$entry) ?>
	        </option>
	    <?php endforeach ?>
	</select>
</div>