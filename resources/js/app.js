import './bootstrap';
import {createApp} from 'vue'

import router from "./router";

import VueSweetalert2 from 'vue-sweetalert2'
import 'sweetalert2/dist/sweetalert2.min.css';

import ExampleComponent from './components/ExampleComponent';
import Index from './components/admin/Index'
import Sidebar from "./components/admin/Sidebar";
import Topbar from "./components/admin/Topbar";
import FooterMain from "./components/admin/FooterMain";
import PageHeading from "./components/admin/PageHeading";


const app = createApp({



    components: {

        ExampleComponent: ExampleComponent,
        Sidebar,
        Topbar,
        FooterMain,
        PageHeading,
        Index


    },



})
app.use(router)
app.use(VueSweetalert2)

app.mount('#app')
//
