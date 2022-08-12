<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component {
    public $weight = 0;
    public $material;
    public $length;
    public $width;
    public $thickness;

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
        if ($this->material != 0) {
            $this->weight = round((($this->length * $this->width) / 144) * $this->thickness * $this->material * 5.2, 2);
            $this->weight = $this->weight . "<sub class='text-[24px]'>lbs</sub>";
        } else {
            $this->weight = 0;
        }
    }

    public function mount() {
        $this->addError('length', 'The length field is invalid.');
        $this->addError('width', 'The width field is invalid.');
    }


    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function render() {
        return view('livewire.calculator');
    }
}
