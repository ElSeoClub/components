<?php

namespace Elseoclub\Components\View\Components\Layout\Sidebar\Menu;

use Illuminate\View\Component;
use function Elseoclub\Components\View\Components\view;

class Item extends Component {

    public function render() {
        return view( 'esc::components.layout.sidebar.menu.item' );
    }
}
