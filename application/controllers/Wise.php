<?php

class Wise extends Application {
    function __construct()
    {
        parent::__construct();
    }
    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------
    function bingo()
    {
       $this->data['pagebody'] = 'justone'; // this is the view we want shown
       // grab the sixth item in the list, to pass on to our view
       $record = $this->quotes->get(6);
       $this->data = array_merge($this->data, $record);
       $this->render();
   }
}