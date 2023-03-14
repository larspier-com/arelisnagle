import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

import './../../vendor/power-components/livewire-powergrid/dist/powergrid';

Alpine.start();

import { livewire_hot_reload } from 'virtual:livewire-hot-reload'

livewire_hot_reload();