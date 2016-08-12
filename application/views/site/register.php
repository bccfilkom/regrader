<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li>
					<i class="glyphicon glyphicon-off"></i> <?php echo $this->lang->line('please_register'); ?>
				</li>
			</ul>
		</div>
	</div>

	<?php if ($this->session->flashdata('error')) : ?>
		<div class="row">
			<div class="col-md-5">
				<div class="alert alert-danger">
					<?php echo $this->session->flashdata('error'); ?>
			    </div>
			</div>
		</div>
	<?php endif; ?>

	<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal" action="" method="post">
				<div class="form-group<?php echo form_error('form[username]') ? ' has-error' : ''; ?>">
					<label class="col-sm-1 control-label"><?php echo $this->lang->line('username'); ?>:</label>
					<div class="col-sm-4">
						<input name="form[username]" type="text" maxlength="30" class="form-control" value="<?php echo set_value('form[username]'); ?>" autofocus="on"/>
						<span class="help-block"><?php echo form_error('form[username]'); ?></span>
					</div>
				</div>
				<div class="form-group<?php echo form_error('form[name]') ? ' has-error' : ''; ?>">
					<label class="col-sm-1 control-label"><?php echo $this->lang->line('name'); ?>:</label>
					<div class="col-sm-4">
						<input name="form[name]" type="text" maxlength="30" class="form-control" value="<?php echo set_value('form[name]'); ?>" autofocus="on"/>
						<span class="help-block"><?php echo form_error('form[name]'); ?></span>
					</div>
				</div>
				<div class="form-group<?php echo form_error('form[password]') ? ' has-error' : ''; ?>">
					<label class="col-sm-1 control-label"><?php echo $this->lang->line('password'); ?>:</label>
					<div class="col-sm-4">
						<input name="form[password]" type="password" maxlength="30" class="form-control"/>
						<span class="help-block"><?php echo form_error('form[password]'); ?></span>
					</div>
				</div>
				<div class="form-group<?php echo form_error('form[repeat_password]') ? ' has-error' : ''; ?>">
					<label class="col-sm-1 control-label"><?php echo $this->lang->line('repeat_password'); ?>:</label>
					<div class="col-sm-4">
						<input name="form[repeat_password]" type="password" maxlength="30" class="form-control"/>
						<span class="help-block"><?php echo form_error('form[repeat_password]'); ?></span>
					</div>
				</div>
				<div class="form-group<?php echo form_error('form[institution]') ? ' has-error' : ''; ?>">
					<label class="col-sm-1 control-label"><?php echo $this->lang->line('institution'); ?>:</label>
					<div class="col-sm-4">
						<input name="form[institution]" type="text" maxlength="30" class="form-control"/>
						<span class="help-block"><?php echo form_error('form[institution]'); ?></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label"><?php echo $this->lang->line('category'); ?>:</label>
					<div class="col-sm-4">
						<select name="form[category_id]" class="col-md-10">
							<?php foreach ($categories as $v) : ?>
								<option value="<?php echo $v['id']; ?>"><?php echo $v['name']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="form-actions col-sm-offset-1">
					<button type="submit" class="btn btn-danger col-sm-3"><i class="glyphicon glyphicon-user"></i> <?php echo $this->lang->line('register'); ?></button>
				</div>
			</form>
		</div>
	</div>
</div>