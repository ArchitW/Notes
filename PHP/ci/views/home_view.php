<p class="bg-success">

	<?php if ($this->session->flashdata('login_suc')): ?>

<?php echo $this->session->flashdata('login_suc');?>
	<?php endif ;?>
</p>

<p class="bg-danger">

	<?php if ($this->session->flashdata('login_failed')): ?>

		<?php echo $this->session->flashdata('login_failed');?>
	<?php endif ;?>
</p>

<h1> login</h1>
<?php
/**
 * Created by PhpStorm.
 * User: Archit
 * Date: 8/13/2018
 * Time: 12:35 PM
 */
