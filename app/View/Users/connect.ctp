<!-- File: /app/View/Users/connect.ctp -->

<!-- Begin page content -->
<div class="container fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="page-header">
                <h1>Hi <?php echo $current_user->full_name ?>!</h1>
            </div>
            <p class="lead">Please fill in the form below to create your PracticeRoom account.</p>
        </div>
    </div>
    <div class="row-fluid">
        <div class="row-fluid">
            <div class="span12">
                <?php echo $this->Form->create('User', array (
                        'class' => 'form-horizontal form-horizontal-sm well', 
                        'inputDefaults' => array(
                            'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
                            'div' => array('class' => 'control-group'),
                            'label' => array('class' => 'control-label'),
                            'between' => '<div>',
                            'after' => '</div>',
                            'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline'))),
                        'url' => array('controller' => 'users', 'action' => 'add'))
                    ); 
                ?> 
                    <fieldset>  
                        <legend>User Details (required):</legend>   
                        <div class="control-group">
                            <label class="control-label">Profile picture:</label>
                            <div class="controls">
                                <img src="<?php echo $current_user->avatar_url; ?>"/>
                                <p><a href="#">Not you?</a></p>
                            </div>
                        </div>
                        <?php echo $this->Form->input('username', array(
                            'label' => 'Username:',
                            'type' => 'text',
                            'class' => 'input-xlarge',
                            'value' => $current_user->username
                        )); ?>
                        <?php echo $this->Form->input('password', array(
                            'label' => array('class' => 'control-label', 'text' => 'Password:'),
                            'type' => 'password',
                            'class' => 'input-xlarge'
                        )); ?>   
                        <?php echo $this->Form->input('password_confirm', array(
                            'label' => array('class' => 'control-label', 'text' => 'Confirm:'),
                            'type' => 'password',
                            'class' => 'input-xlarge'
                        )); ?>  
                        <?php echo $this->Form->input('email', array(
                            'label' => array('class' => 'control-label', 'text' => 'Email Address:'),
                            'type' => 'text',
                            'class' => 'input-xlarge'
                        )); ?>
                        <?php echo $this->Form->input('userid', array(
                            'type' => 'hidden',
                            'value' => $current_user->id
                        )); ?>
                        </div>
                        <?php echo $this->Form->input('access_token', array(
                            'type' => 'hidden',
                            'value' => $access_token['access_token']
                        )); ?>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <label for="terms" class="checkbox">
                                    <input required="" name="terms" type="checkbox" value="agreed">
                                    Agree to the <a href="#">Terms &amp; Conditions</a> &amp; <a href="#">Privacy Policy</a>.
                                </label>
                            </div>  
                        </div>
                    </fieldset>
                    <div class="control-group">
                        <div class="controls">
                            <input type="submit" class="btn btn-primary" value="Create Account"/>   
                            <button onclick="javascript:doCancel('index.php');" class="btn btn-secondary" type="button">Cancel</button> 
                        </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
