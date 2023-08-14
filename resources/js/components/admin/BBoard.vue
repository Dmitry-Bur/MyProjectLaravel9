<template>
    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Border Utilities</h1>
    <p class="mb-4">Bootstrap's default utility classes can be found on the official <a
        href="https://getbootstrap.com/docs">Bootstrap Documentation</a> page. The custom utilities
        below were created to extend this theme past the default utility classes built into Bootstrap's
        framework.</p>

    <!-- Content Row -->
    <div class="row">

        <!-- Border Left Utilities -->
        <div class="ml-5 col-lg-8">

            <div @click="showDiv('all')"
                 :class="show==='all' ?'card py-3 border-bottom-success' :'card py-3 border-left-primary'">

                <div class="card-body">
                    <span>Все объявления</span>

                </div>

            </div>

            <div class="card shadow mb-4" v-show="show==='all'">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Продавец</th>
                                <th>Наименование</th>
                                <th>Статус</th>
                                <th>Дата создания</th>
                                <th>Последнее редактирование</th>
                                <th>Подробнее</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Продавец</th>
                                <th>Наименование</th>
                                <th>Статус</th>
                                <th>Дата создания</th>
                                <th>Последнее редактирование</th>
                                <th>Подробнее</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <template v-if="bBoards">
                                <tr v-for="bBoard in bBoards">
                                    <td>{{ bBoard.id }}</td>
                                    <td>-----</td>
                                    <td>{{ bBoard.title }}</td>
                                    <td :class="styl(bBoard.status)">
                                        {{ bBoard.status }}
                                    </td>
                                    <td>{{ bBoard.created_at }}</td>
                                    <td>{{ bBoard.updated_at }}</td>

                                    <td>
                                        <a href="#"  @click.prevent="detailed(bBoard.id)" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-info-circle"></i>
                                        </span>
                                            <span class="text">Подробнее</span>
                                        </a>
                                    </td>
                                </tr>
                            </template>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div @click="showDiv('checking')"
                 :class="show==='checking' ?'card py-3 border-bottom-success' :'card py-3 border-left-primary'">
                <div class="card-body">
                    В процессе проверки
                </div>
            </div>

            <div class="card shadow mb-4" v-show="show==='checking'">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Продавец</th>
                                <th>Наименование</th>
                                <th>Статус</th>
                                <th>Дата создания</th>
                                <th>Последнее редактирование</th>
                                <th>Подробнее</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Продавец</th>
                                <th>Наименование</th>
                                <th>Статус</th>
                                <th>Дата создания</th>
                                <th>Последнее редактирование</th>
                                <th>Подробнее</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <template v-if="bBoards">
                                <tr v-for="bBoard in bBoards">
                                        <td>{{ bBoard.id }}</td>
                                        <td>-----</td>
                                        <td>{{ bBoard.title }}</td>
                                        <td :class="styl(bBoard.status)">
                                            {{ bBoard.status }}
                                        </td>
                                        <td>{{ bBoard.created_at }}</td>
                                        <td>{{ bBoard.updated_at }}</td>

                                        <td>
                                            <a href="#" @click.prevent="detailed(bBoard.id)" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-info-circle"></i>
                                        </span>
                                                <span class="text">Подробнее</span>
                                            </a>
                                        </td>
                                </tr>
                            </template>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div @click="showDiv('active')"
                 :class="show==='active' ?'card py-3 border-bottom-success' :'card py-3 border-left-primary'">
                <div class="card-body">
                    Активные
                </div>
            </div>

            <div class="card shadow mb-4" v-show="show==='active'">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Продавец</th>
                                <th>Наименование</th>
                                <th>Статус</th>
                                <th>Дата создания</th>
                                <th>Последнее редактирование</th>
                                <th>Подробнее</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Продавец</th>
                                <th>Наименование</th>
                                <th>Статус</th>
                                <th>Дата создания</th>
                                <th>Последнее редактирование</th>
                                <th>Подробнее</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <template v-if="bBoards">
                                <tr v-for="bBoard in bBoards">
                                        <td>{{ bBoard.id }}</td>
                                        <td>-----</td>
                                        <td>{{ bBoard.title }}</td>
                                        <td :class="styl(bBoard.status)">
                                            {{ bBoard.status }}
                                        </td>
                                        <td>{{ bBoard.created_at }}</td>
                                        <td>{{ bBoard.updated_at }}</td>

                                        <td>
                                            <a href="#"  @click.prevent="detailed(bBoard.id)" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-info-circle"></i>
                                        </span>
                                                <span class="text">Подробнее</span>
                                            </a>
                                        </td>
                                </tr>
                            </template>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div @click="showDiv('donedeal')"
                 :class="show==='donedeal' ?'card py-3 border-bottom-success' :'card py-3 border-left-primary'">
                <div class="card-body">
                    Сделка состоялась
                </div>
            </div>


            <div class="card shadow mb-4" v-show="show==='donedeal'">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Продавец</th>
                                <th>Наименование</th>
                                <th>Статус</th>
                                <th>Дата создания</th>
                                <th>Последнее редактирование</th>
                                <th>Подробнее</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Продавец</th>
                                <th>Наименование</th>
                                <th>Статус</th>
                                <th>Дата создания</th>
                                <th>Последнее редактирование</th>
                                <th>Подробнее</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <template v-if="bBoards">
                                <tr v-for="bBoard in bBoards">
                                        <td>{{ bBoard.id }}</td>
                                        <td>-----</td>
                                        <td>{{ bBoard.title }}</td>
                                        <td :class="styl(bBoard.status)">
                                            {{ bBoard.status }}
                                        </td>
                                        <td>{{ bBoard.created_at }}</td>
                                        <td>{{ bBoard.updated_at }}</td>
                                        <td>
                                            <a href="#"  @click.prevent="detailed(bBoard.id)" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-info-circle"></i>
                                        </span>
                                                <span class="text">Подробнее</span>
                                            </a>
                                        </td>
                                </tr>

                            </template>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>


    </div>


</template>

<script>





export default {
    name: "BBoard",

    data() {
        return {
            bBoards: null,
            show: null,


            sss: null,

        }
    },

    mounted() {
        //this.getBBoards()
    },

    methods: {
        getBBoards(status) {
            axios.get(`/api/admins/bboard/${status}`)
                .then(res => {
                    console.log(res.data.data);
                    this.bBoards = res.data.data
                })
        },

        styl(st) {
            if (st === 'checking') return 'text-warning text-uppercase mb-1';
            if (st === 'donedeal') return 'text-info text-uppercase mb-1';
            if (st === 'active') return 'text-success text-uppercase mb-1';

        },


        showDiv(status) {
this.bBoards=null
            this.getBBoards(status)

            this.sss = null
            if (status !== this.show) {
                this.show = status
            } else {
                this.show = null
            }
        },


        detailed(ads){
            axios.get(`/api/admins/bboard/${ads}`)
                .then(res => {
                    console.log(res.data.data);
                    //this.bBoards = res.data.data

                })
        }
    },

    computed: {}


}
</script>

<style scoped>

</style>
