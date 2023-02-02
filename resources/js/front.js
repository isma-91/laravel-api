const { h } = require("vue");

require("./bootstrap");
window.Vue = require("vue");

import App from './App.vue'; // si mette il ./ prima di App perchè altrimenti did efault senza mettere niente lo andrebbe a cercare nella cartella node modules.

new Vue({
    el: '#root',
    render: h => h(App),
})
