<?php include 'inc/header.php'; ?>

	<h2 class="page-header">Create Job Listing</h2>
	<form method="post" action="create.php">
		<div class="form-group">
			<label>Company</label>
			<input type="text" name="company" placeholder="Company" class="form-control">
		</div>
		<div class="form-group">
			<label>Category</label>
			<select name="category" class="form-control">
	            <option value="0">Choose Category</option>
	            <?php foreach($categories as $category): ?>
	              <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
            	<?php endforeach; ?>
          </select>
		</div>
		<div class="form-group">
			<label>Job Title</label>
			<input type="text" name="job_title" placeholder="Job Title" class="form-control">
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea name="description" rows="5" placeholder="Description" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label>Location</label>
			<input type="text" name="location" placeholder="Location" class="form-control">
		</div>
		<div class="form-group">
			<label>Salary</label>
			<input type="text" name="salary" placeholder="Salary" class="form-control">
		</div>
		<div class="form-group">
			<label>Contact User</label>
			<input type="text" name="contact_user" placeholder="Contact User" class="form-control">
		</div>
		<div class="form-group">
			<label>Contact Email</label>
			<input type="text" name="contact_email" placeholder="Contact email" class="form-control">
		</div>
		<input type="submit" name="submit" value="Submit" class="btn btn-default">
	</form>
	
<?php include 'inc/footer.php'; ?>