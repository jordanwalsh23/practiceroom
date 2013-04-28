<?php

App::import('Vendor', 'Soundcloud');
App::import('Vendor', 'PracticeRoom');

class UsersController extends AppController {

	private $client;

    public function beforeFilter() {
        $this->Auth->allow('index', 'connect', 'add');
    }

    public function index() {}

    public function login() {
    	
    	//If this wasn't a post, then redirect to the home page.
    	if( !$this->request->is('post') ) {
    		$this->render('/Pages/home');
    	} else {
            //Check to see if we got the POSTDATA
            $soundcloudconnect = $this->request->data['User']['soundcloudconnect'];

            //first check if soundcloud was clicked
            if($soundcloudconnect == "true") {
                $this->redirect(array('action' => 'connect'));
            } 

            //second move on to validating the username and password
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
            }

            $this->render('/pages/home');
        }
    }

    public function logout() {
        $this->Session->setFlash(__('Logged Out'), 'default', array(), 'auth');
        $this->redirect($this->Auth->logout());
    }

    public function connect() {

    	$redirect = "";
		$clientId = "";
		$clientSecret = "";
		$servername = "";

		$code = "";

	    //need to save this informations somewhere else
		$servername = $_SERVER['SERVER_NAME'];

		if($servername == "localhost") {
			//localhost
			$redirect = "http://localhost:8888/PracticeRoom/Users/connect";
			$clientId = "89aa098f19718a885389c33b81ca7c6e";
			$clientSecret = "9c09244bee5c4003b0e2fbb9272dedd2";
	   		
		} else {
			//heroku
			$redirect = "http://practiceroom.herokuapp.com/connect";
			$clientId = "5ff4c246d31af2399229c70b6cef5b3e";
			$clientSecret = "566131899bc3c10481b64da417e0b105";
		}

    	$client = new Services_Soundcloud($clientId, $clientSecret, $redirect);

    	if (array_key_exists('code', $this->request->query)) {
			$code = $this->request->query['code'];
		} else {
			$this->redirect($client->getAuthorizeUrl());
		}

		$access_token = $client->accessToken($code);

		//we've got the access-token, now lets retrieve the user information from SoundCloud
		$response = $client->get('me');
    	$current_user = json_decode($response);

        $existingUser = $this->User->findByUsername($current_user->username);

        if($existingUser) {
            //User already exists so redirect to competitions
            $this->Auth->login($existingUser);
            $this->redirect(array('controller' => 'competitions', 'action' => 'index'));
        }

		//Lets present this information back to the user for confirmation.
		$this->set('current_user', $current_user);
    }

    public function add() {
        if ($this->request->is('post')) {

            if ($this->request->data['User']['password'] == $this->request->data['User']['password_confirm']) {
                $this->Auth->login($this->request->data['User']); 
                $this->User->create();
                $this->User->save($this->request->data);
                $this->redirect(array('controller' => 'competitions', 'action' => 'index'));
            } else {
                $this->Session->setFlash('Passwords do not match.');
                $this->render('/Users/connect.ctp');
            }
        }
    }
 }

?>