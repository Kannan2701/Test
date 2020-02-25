
<form action="<?php echo base_url(); ?>Welcome/applyy_data" method="post">
  <div class="container">
  <?php
	if($this->session->flashdata('msg'))
	{
		echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">'.$this->session->flashdata('msg').'
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>';
		
	}
	?>
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email">Name</label>
    <input type="text" class="form-control" placeholder="Name" name="name" required>

    <label for="psw">Department</label>
    <input type="text" class="form-control" placeholder="Department" name="department" required>

    <label for="psw-repeat">Project</label>
    <input type="text" class="form-control" placeholder="Project" name="project" required>
    <hr>
    <button type="submit" class="button button-contactForm boxed-btn mb-5">Register</button>
  </div>
</form>