<?php

namespace Elseoclub\Components\View\Components;

use Illuminate\View\Component;

class Content extends Component {

    public function render() {
        return view( 'esc::components.content' );
    }
}
