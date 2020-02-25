
<form action="<?php echo base_url(); ?>Welcome/register_data" method="post">
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

    <label for="email">Email</label>
    <input type="text" class="form-control" placeholder="Enter Email" name="email" required>

    <label for="psw">Password</label>
    <input type="password" class="form-control" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat">Repeat Password</label>
    <input type="password" class="form-control" placeholder="Repeat Password" name="psw_repeat" required>
    <hr>
    <button type="submit" class="button button-contactForm boxed-btn mb-5">Register</button>
  </div>
</form>