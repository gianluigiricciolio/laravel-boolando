import './bootstrap';
import '~resources/scss/app.scss';
import setProdPrices from './utils/setProdPrices.js'

// path per gestione immagini con vite
import.meta.glob([
    '../img/**'
]);

import * as bootstrap from 'bootstrap';

// functions
setProdPrices();
