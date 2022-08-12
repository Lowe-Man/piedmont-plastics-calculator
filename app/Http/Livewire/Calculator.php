<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component {
    public $weight = 0;
    public $material;
    public $length;
    public $width;
    public $thickness = .25;

//  Make sure length is between 1-120 inclusive
//  Make sure width is between 1-60 inclusive
    protected $rules = [
        'length' => [
            'required',
            'regex:/^([1-9]|([1-9][0-9])|100|11[0-9]|120)$/'
        ],
        'width' => [
            'required',
            'regex:/^([1-9]|[1-5][0-9]|60)$/'
        ],
    ];

    public function submit() {
        $this->validate();
//       Remove lbs label if weight is equal to 0
        if ($this->material != 0) {
            $this->weight = round((($this->length * $this->width) / 144) * $this->thickness * $this->material * 5.2, 1);
            $this->weight = $this->weight . "<sub class='text-[24px]'>lbs</sub>";
        } else {
            $this->weight = 0;
        }
    }

//  Set form onload to invalid so that the submit button is grayed out by default
    public function mount() {
        $this->addError('length', 'The length field is invalid.');
        $this->addError('width', 'The width field is invalid.');
    }

//  When a form field is updated run the rules above to make sure the inputs are valid
    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function render() {
        return view('livewire.calculator');
    }
}
