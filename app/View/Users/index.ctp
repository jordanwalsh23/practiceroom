<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
if (!Configure::read('debug')):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>

<!-- Begin page content -->
<div class="container fluid">
	<div class="row-fluid">
		<div class="span6">
			<div class="page-header">
				<h1>Welcome to Practice Room</h1>
			</div>
			<p class="lead">Create your songs. Find your lyrics.</p>
			<p>Use Practice Room to create lyrics to your songs.  Lyrics are written by people like you.  You choose what you like, and only pay for what you use</p>
		</div>
		<div class="span6">
    		<?php echo $this->Form->create('User', array('class' => 'form-horizontal form-horizontal-sm well', 'url' => array('controller' => 'users', 'action' => 'login'))); ?> 
			    <h3>Sign in below</h3>
	    		<?php echo $this->Form->input('username', array(
		            'label' => 'Email or Username',
		            'type' => 'text',
		            'placeholder' => 'Email or Username'
		        )); ?>
		        <?php echo $this->Form->input('password', array(
		            'label' => 'Password',
		            'type' => 'password',
		            'placeholder' => 'Password'
		        )); ?>
		        <?php echo $this->Form->input('rememberMe', array(
		            'label' => '',
		            'type' => 'select',
		            'multiple' => 'checkbox',
		            'options' => array(
		                '1' => 'Remember Me')
		        )); ?>
		        <?php echo $this->Form->input('soundcloudconnect', array(
		            'label' => '',
		            'type' => 'hidden'
		        )); ?>
			    <div class="control-group">
			    	<div class="controls">
			    		<input type="submit" class="btn" value="Sign In"/>
			    		<input type="submit" value="" class="imgClass" id="soundcloud-connect" onclick="javascript:$('#UserSoundcloudconnect').val('true');return true;" />
			    	</div>
			    </div>
			 </form>    
		</div>
	</div>
	<div class="row-fluid">
		<div class="span4 well well-marketing">
			<h3>Thousands of producers</h3>
			<p>Textual content that talks about the thousands of people that are currently producing lyrics.</p>
		</div>
		<div class="span4 well well-marketing">
			<h3>Only pay for what you use</h3>
			<p>Find the lyrics for your song, at a price that you want to pay.</p>
			<p>Starting from $0 to $$$</p>
		</div>
		<div class="span4 well well-marketing">
			<h3>You own the lyrics</h3>
			<p>Once you finish the process, you own the lyrics and can use them how and when you want.</p>
		</div>
	</div>
</div>
