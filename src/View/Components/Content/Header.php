<?php

namespace Elseoclub\Components\View\Components\Content;

use Illuminate\View\Component;

class Header extends Component {

    public function render() {
        return view( 'esc::components.content.header' );
    }
}
