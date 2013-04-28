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
        //Get the information from the Soundcloud and return it to the model.
    }
}