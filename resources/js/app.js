/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import moment from 'moment';
import 'moment/locale/id';
moment.locale('id');

import { Form, HasError, AlertError } from 'vform';

import Swal from 'sweetalert2';
window.Swal = Swal;

const Toast = Swal.mixin({
	Toast: true,
	position: 'top-end',
	showConfirmButton: false,
	timer: 3000
});

window.toast = Toast;

window.Form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import VueProgressBar from 'vue-progressbar';
Vue.use(VueProgressBar, {
	color: '#bffaf3',
	failedColor: '#874b4b',
	thickness: '3px',
	transition: {
		speed: '0.5s',
		opacity: '0.6s',
		termination: 300
	},
	autoRevert: true,
	location: 'top',
	inverse: false
});

let routes = [
	{ path: '/dashboard', component: require('./components/Dashboard.vue').default },
	{ path: '/users', component: require('./components/Users.vue').default },
	{ path: '/satker', component: require('./components/balai/Satker.vue').default },
	{ path: '/balai', component: require('./components/balai/Balai.vue').default },
	{ path: '/balai_progres', component: require('./components/progres/Balai_progres.vue').default },
	{ path: '/paket', component: require('./components/progres/Paket.vue').default },
	{ path: '/paket_emon', component: require('./components/progres/Paket_emon.vue').default },
	{ path: '/sungai_db', component: require('./components/database/Sungai.vue').default },
	{ path: '/ma_db', component: require('./components/database/Ma.vue').default },
	{ path: '/pah_db', component: require('./components/database/Pah.vue').default },
	{ path: '/wdse_db', component: require('./components/database/Wdse.vue').default },
	{ path: '/provinsi', component: require('./components/wilayah/Provinsi.vue').default },
	{ path: '/kabupaten', component: require('./components/wilayah/Kabupaten.vue').default },
	{ path: '/kecamatan', component: require('./components/wilayah/Kecamatan.vue').default },
	{ path: '/desa', component: require('./components/wilayah/Desa.vue').default },
	{ path: '/baseline', component: require('./components/eprogramming/Baseline.vue').default },
	{ path: '/stock', component: require('./components/eprogramming/Stock.vue').default },
	{ path: '/at_db', component: require('./components/database/AT.vue').default },
	{ path: '/profile', component: require('./components/Profile.vue').default },
	{ path: '/developer', component: require('./components/Developer.vue').default }
];

const router = new VueRouter({
	mode: 'history',
	routes // short for `routes: routes`
});

Vue.filter('upText', function(text) {
	return text.charAt(0).toUpperCase() + text.slice(1);
});

Vue.filter('myDate', function(created) {
	return moment(created).format('LL');
});

window.Fire = new Vue();

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
	el: '#app',
	router
});
