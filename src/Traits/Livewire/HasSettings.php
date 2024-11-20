<?php

namespace Elseoclub\Components\Traits\Livewire;

trait HasSettings {
    public array $settingsMenu = [
        'params'        => null,
        'current_menu'  => null,
        'livewire_path' => null,
        'menu'          => []
    ];
    private $livewireSettingsPath;

    private function loadCurrentSettingsMenu( $objectId, $defaultMenu ) {
        if ( session()->has( $this::class . '_current_menu' ) && session( $this::class . '_current_object' ) === $objectId ) {
            $this->settingsMenu['current_menu'] = session( $this::class . '_current_menu' );
        } else {
            session( [ $this::class . '_current_object' => $objectId ] );
            $this->settingsMenu['current_menu'] = $defaultMenu;
        }
    }

    private function addMenuGroup( string $name, string $label ): void {
        $this->settingsMenu['menu'][ $name ] = [
            'label' => $label,
            'menu'  => []
        ];
    }

    private function addMenuGroupItem( string $group, string $name, string $label, string|null $icon = null ): void {
        if ( ! isset( $this->settingsMenu['menu'][ $group ] ) ) {
            $this->addMenuGroup( $group, $group );
        }
        $this->settingsMenu['menu'][ $group ]['menu'][ $name ] = [
            'label' => $label,
            'icon'  => $icon
        ];
    }

    private function setSettingsPath( string $path ): void {
        $this->settingsMenu['livewire_path'] = $path;
    }

    private function setSettingsParams( mixed $params ) {
        $this->settingsMenu['params'] = $params;
    }

    public function setCurrentMenu( string $menu ): void {
        $this->settingsMenu['current_menu'] = $menu;
        session( [ $this::class . '_current_menu' => $menu ] );
    }

}
