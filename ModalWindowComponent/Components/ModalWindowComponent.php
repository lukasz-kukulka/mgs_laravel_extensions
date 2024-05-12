<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalWindowComponent extends Component
{
    public function __construct( $id, $title, $message, $closeButtonText, $secondButtonLink, $secondButtonText, $thirdButtonLink, $thirdButtonText ) {
        $this->id = $id;
        $this->title = $title;
        $this->message = $message;
        $this->closeButtonText = $closeButtonText;
        $this->secondButtonLink = $secondButtonLink;
        $this->secondButtonText = $secondButtonText;
        $this->thirdButtonLink = $thirdButtonLink;
        $this->thirdButtonText = $thirdButtonText;
    }

    public function render(): View|Closure|string {
        return view('components.cargo_details_component', [
            'id' => $this->id,
            'title' => $this->title,
            'message' => $this->message,
            'closeButtonText' => $this->closeButtonText,
            'secondButtonLink' => $this->secondButtonLink,
            'secondButtonText' => $this->secondButtonText,
            'thirdButtonLink' => $this->thirdButtonLink,
            'thirdButtonText' => $this->thirdButtonText,
        ] );
    }

    private $id;
    private $title;
    private $message;
    private $closeButtonText;
    private $secondButtonLink;
    private $secondButtonText;
    private $thirdButtonLink;
    private $thirdButtonText;
}