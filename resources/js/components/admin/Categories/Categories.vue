<template>
    <!-- Page Heading -->
    <p class="mb-4">Страница для создания и редактирования категорий объявлений.</p>
    <div class="form-group">
        <input type="text" class="form-control w-25" id="category" v-model="category"
               aria-describedby="category" placeholder="Введите название новой категории...">
        <p v-if="storeError" class="text-danger"> {{storeError}} </p>
        <button :disabled="!category" href.prevent="#" @click="createCategory()"
                class="btn btn-info btn-icon-split mt-2">
         <span class="icon text-white-50">
           <i class="fas fa-check"></i>
         </span>
            <span class="text">Создать</span>
        </button>
    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Таблица категорий:</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered col-5" id="dataTable">
                    <thead>
                    <tr>
                        <th class="col-1">№</th>
                        <th>Наименование</th>
                        <th class="col-2 -align-center">Действия</th>
                        <th class="col-1 -align-center">
                            <a href.prevent="#" @click="deleteModal()"
                               :class="arrDelete.length ? 'btn btn-danger btn-icon-split ':' disabled btn btn-danger btn-icon-split ' ">
                                <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                </span>
                                <span class="text">Удалить.</span>
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>№</th>
                        <th>Наименование</th>
                        <th class="col-2 -align-center">Действия</th>
                        <th>
                            <input type="checkbox" class="custom-control-input" id="all_del" v-model="delCats">
                            <label class="custom-control-label" for="all_del">Всё</label>
                        </th>

                    </tr>
                    </tfoot>
                    <tbody>
                    <template v-if="categories" v-for="(category, index) in categories">
                        <tr v-show="!(isEd===category.id)">
                            <td>{{ index + 1 }}</td>
                            <td>{{ category.name }}</td>
                            <td class=" ms-auto">
                                <a href.prevent="#" @click="isEd=category.id" class="btn btn-primary btn-circle ">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href.prevent="#" @click="deleteModal(category.id)"
                                   class="btn btn-danger btn-circle  ml-1">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" :id="category.id"
                                           :value="category.id" v-model="arrDelete">
                                    <label class="custom-control-label" :for="category.id"></label>
                                </div>
                            </td>
                        </tr>


                        <tr v-show="isEd === category.id">
                            <td>
                                {{ index + 1 }}
                            </td>

                            <td colspan="2">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputEmail"
                                           aria-describedby="emailHelp" placeholder="Введите значение....."
                                           v-model="category.name">

                                </div>

                                <p v-if="errors.length && errors[isEd]" class="text-danger"> {{errors[isEd].name[0]}} </p>
                            </td>
                            <td>
                                <a href.prevent="#" @click="updateCategory(category.id,category.name)"
                                   class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                </span>
                                    <span class="text">Сохранить</span>
                                </a>
                            </td>
                        </tr>


                    </template>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>


// set content


import modal from "../../../modal";


export default {
    name: "Categories",


    data() {
        return {

            category: null,
            categories: null,
            isEd: null,

            arrDelete: [],


            delCats: false,

            storeError: null,
            errors: [],
        }
    },

    mounted() {
        this.getCategories()

    },

    methods: {

        createCategory() {
            axios.post(`/api/admins/categories`, {name: this.category})
                .then(res => {
                    console.log(res.data)
                    this.createModal(res.data)
                    res.data.message ? this.category = null : ''
                    this.getCategories()
                    this.storeError = null
                })
            .catch(error=>{
                this.storeError = error.response.data.errors.name[0]
                console.log(this.storeError)

            })

        },


        getCategories() {
            axios.get('/api/admins/categories')
                .then(res => {
                    console.log(res.data.data);
                    this.categories = res.data.data

                })
        },

        deleteCategories(id = null) {

            if (id) {
                axios.delete(`/api/admins/categories/${id}`)
                    .then(res => {
                        if (res.statusText === 'OK') {

                        }
                        this.getCategories()

                    })
                id = null
            } else {
                if (this.arrDelete.length)
                    this.arrDelete.forEach(res => {
                        axios.delete(`/api/admins/categories/${res}`)
                            .then(res => {
                                console.log()
                                this.arrDelete = []
                                this.getCategories()
                            })
                    })
            }


        },

        updateCategory(id, name) {
            axios.patch(`/api/admins/categories/${id}`, {name: name})
                .then(res => {
                    this.isEd = null
                    delete this.errors[id]
                    this.getCategories()
                    console.log(res);
                 //   this.editModal(res.data.message)
                })
                .catch( errors =>{
                    console.log(this.isEd)
                this.errors[this.isEd] = errors.response.data.errors;
                    console.log(this.errors)
            })
        },

        deleteModal(id) {
            this.$swal.fire({
                title: 'Удалить категорию?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Отмена',
                confirmButtonText: 'Да!'
            }).then((result) => {
                if (result.isConfirmed) {

                    this.deleteCategories(id)

                    this.$swal.fire(
                        'Категории удалены!',
                        'Категории успешно удалены.',
                        'success'
                    )
                }
            })
        },

        createModal(res) {
            console.log(res);
            if (res.message === true) {
                this.$swal.fire({
                    icon: 'success',
                    title: 'Категория успешно создана!',
                    showConfirmButton: false,
                    timer: 1000,
                })
            } else {
                this.$swal.fire({
                    icon: 'warning',
                    title: 'Такая категорию уже существует!',
                })
            }


        },

        editModal(res) {
        //     console.log(res);
        //     if (res === true) {
        //         this.$swal.fire({
        //             icon: 'success',
        //             title: 'Категория успешно изменена!',
        //             showConfirmButton: false,
        //             timer: 1000,
        //         })
        //     } else {
        //         this.$swal.fire({
        //             icon: 'warning',
        //             title: 'Ошибка!',
        //         })
        //     }
        //
        //
        },
    },


    computed: {},

    watch: {
        delCats: function (newBoolean) {

            console.log(this.arrDelete)
            if (newBoolean) {
                this.categories.forEach(cat => {
                        if (!this.arrDelete.includes(cat.id)) {
                            this.arrDelete.push(cat.id)
                            console.log(this.arrDelete)

                        }
                    }
                )
            } else {
                console.log(this.arrDelete)
                this.arrDelete.length = 0
            }
        },

        arrDelete: function (arr) {
            if (arr.length === 0) {
                this.delCats = false
            }
        }


    }

}
</script>

<style scoped>

</style>
