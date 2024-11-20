<?php

namespace Elseoclub\Components\View\Components;

use Illuminate\View\Component;

class Table extends Component {

    public function render() {
        return view( 'esc::components.table' );
    }
}
