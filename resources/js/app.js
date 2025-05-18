import './bootstrap';
import 'flowbite'
import '../css/app.css'

import notification from './notification';

import Toastify from 'toastify-js'
import 'toastify-js/src/toastify.css';

// Import Toastify JS
window.Toastify = Toastify;
// window.Toastify = require('toastify-js').default;

  
import Alpine from 'alpinejs';
Alpine.data('notification', notification);

window.Alpine = Alpine;

Alpine.start();




