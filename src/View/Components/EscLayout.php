<?php

namespace Elseoclub\Components\View\Components;

use Illuminate\View\Component;

class EscLayout extends Component {

    public function render() {
        return view( 'esc::layouts.esc' );
    }
}
