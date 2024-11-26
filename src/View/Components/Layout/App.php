<?php

namespace Elseoclub\Components\View\Components\Layout;

use Illuminate\View\Component;
use function Elseoclub\Components\View\Components\view;

class App extends Component {

    public function render() {
        return view( 'esc::components.layout.app' );
    }
}
