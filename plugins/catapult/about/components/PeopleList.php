<?php
namespace Catapult\About\Components;

use Cms\Classes\ComponentBase;
use Catapult\About\Models\About;

class PeopleList extends ComponentBase {

    public function componentDetails() {
        return [
          'name' => 'About page bio\'s',
          'description' => 'Creates list of people and their bios for the about page'
        ];
    }

    public function onRun() {
        $this->people = $this->loadPeople();
    }

    protected function loadPeople() {
        return About::all();
    }

    public $people;
}
