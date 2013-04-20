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
		    <form id="soundcloudConnectForm" class="form-horizontal form-horizontal-sm well" method="GET" action="connect.php">
			    <h3>Sign in below</h3>
			    <div class="control-group">
			   		<label class="control-label" for="inputEmail">Email</label>
			    	<div class="controls">
			    		<input type="text" id="inputEmail" placeholder="Email">
			    	</div>
			    </div>
			    <div class="control-group">
			    	<label class="control-label" for="inputPassword">Password</label>
			    	<div class="controls">
			    		<input type="password" id="inputPassword" placeholder="Password">
			    	</div>
			    </div>
			    <div class="control-group">
			    	<div class="controls">
			    		<label class="checkbox" for="rememberMe">
			    			<input type="checkbox" id="rememberMe" name="rememberMe"/> Remember me
			    		</label>
			    	</div>
			    </div>
			    <div class="control-group">
			    	<div class="controls">
			    		<button onclick="javascript:alert('Not implemented yet!\n\nPlease use the SoundCloud login.\n\nU: practiceroom-test\nP: test123'); return false;" class="btn">Sign in</button>
						<img id="soundcloud-connect" class="" onclick="javascript:$('#soundcloudConnectForm').submit();" img="assets/images/img_trans.gif" height="1" width="1"/>
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
