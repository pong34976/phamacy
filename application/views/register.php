    <div class="container">
	<div class="col-md-6">
	 <h2>Registration</h2>
	 <form action="<?= base_url() ?>register/create" method="post">
	 <?= validation_errors() ?>
	 <div class="from-group">
	 <label for="name">Name</label>
	 <input type="text" name="name" id="name" class="form-control">
	 </div>
	 
	 <div class="from-group">
	 <label for="username">Username</label>
	 <input type="text" name="username" id="username" class="form-control">
	 </div>
	 
	 <div class="from-group">
	 <label for="email">Email</label>
	 <input type="text" name="email" id="email" class="form-control">
	 </div>
	 
	  <div class="from-group">
	 <label for="password">Password</label>
	 <input type="password" name="password" id="password" class="form-control">
	 </div>
	 
	 <div class="from-group">
	 <label for="confirm_password">Password</label>
	 <input type="password" name="confirm_password" id="confirm_password" class="form-control">
	 </div>
	  <div class="from-group">
	 
	 <input type="submit" name="submit" id="submit" class="btn btn-primary">
	 </div>
	 </form>
	 
	 
	 
	 </div></div>