import './bootstrap';

import Alpine from 'alpinejs';
import raffle from './raffle';

window.Alpine = Alpine;

Alpine.data('raffle', raffle);

Alpine.start();
