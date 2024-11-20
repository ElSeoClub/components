<?php

namespace Elseoclub\Components\View\Components;

use Illuminate\View\Component;

class Card extends Component {

    public function render() {
        return view( 'esc::components.card' );
    }
}
