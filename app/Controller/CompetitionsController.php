<?php

App::import('Vendor', 'Soundcloud');
App::import('Vendor', 'PracticeRoom');

class CompetitionsController extends AppController {

    public function index() {
        $this->set('competitions', $this->Competition->find('all'));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid Competition'));
        }

        $competition = $this->Competition->findById($id);
        if (!$competition) {
            throw new NotFoundException(__('Invalid Competition'));
        }
        $this->set('competition', $competition);
    }

    public function add() {

        $id = $this->Auth->user('userid');

        $client = Configure::read('soundcloud_client'); 

        $response = $client->get("users/".$id."/tracks");
    
        //put the listing of tracks into an array
        $tracks = json_decode($response);

        $tracks_array = array();

        foreach ($tracks as &$track) {
            $track_url = $track->permalink_url;
            $client->setCurlOptions(array(CURLOPT_FOLLOWLOCATION => 1));
            $embed_info = json_decode($client->get('oembed', array('url' => $track_url)));
            $tracks_array[$track_url] = $embed_info->html;
        }

        $this->set('tracks', $tracks);
        $this->set('tracks_array', $tracks_array);
    }
}