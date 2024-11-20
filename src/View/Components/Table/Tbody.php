<?php

namespace Elseoclub\Components\View\Components\Table;

use Illuminate\View\Component;

class Tbody extends Component {

    public function render() {
        return view( 'esc::components.table.tbody' );
    }
}
