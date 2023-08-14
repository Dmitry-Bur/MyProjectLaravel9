<template>

    <!-- Page Heading -->
    <p class="mb-4">Страница для создания и редактирования подкатегорий объявлений.</p>
    <div class="form-group">
        <input type="text" class="form-control w-25" id="category" v-model="subCategory"
               aria-describedby="category" placeholder="Введите название новой подкатегории...">



    <div  class="dropdown mb-4 mt-4">
        Принадлежит к категории:
        <select :disabled="!subCategory" class="btn btn-primary dropdown-toggle"  v-model="category">
            <option v-for="category in categories" class="dropdown-item" :value="category.id"> {{ category.name }}</option>
        </select>
    </div>


        <a href.prevent="#" @click="createSubCategory()" class="btn btn-info btn-icon-split mt-2">
         <span class="icon text-white-50">
           <i class="fas fa-check"></i>
         </span>
            <span class="text">Создать</span>
        </a>
    </div>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Таблица подкатегорий:</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered col-5" id="dataTable">
                    <thead>
                    <tr>
                        <th class="col-1">№</th>
                        <th>Наименование</th>
                        <th class="col-2 -align-center">Действия</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>№</th>
                        <th>Наименование</th>
                        <th class="col-2 -align-center">Действия</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <template v-if="categories" v-for="(category, index) in categories">
                        <tr >
                            <td>{{ index + 1 }}</td>
                            <td>{{ category.name }}</td>

                            <td class=" ms-auto">
                                <a href="#" @click.prevent="isShow(category.id)" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-circle-down"></i>
                                        </span>
                                    <span class="text">Подкатегории</span>
                                </a>
                            </td>
                        </tr>


                        <tr v-if="subCategories" v-show="isEd === category.id"
                            v-for="(subcategory, index) in subCategories[index]">


                            <td>
                                {{ index + 1 }}
                            </td>

                            <td colspan="1">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputEmail"
                                           aria-describedby="emailHelp" placeholder="Введите значение..."
                                           v-model="subcategory.name">
                                </div>
                            </td>
                            <td>
                                <a href.prevent="" @click="updateSubCategory(subcategory.id, subcategory.name)" class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                </span>
                                    <span class="text">Сохранить</span>
                                </a>
                                <a href.prevent="#" @click="deleteCategory(subcategory.id)" class="btn btn-danger btn-icon-split mt-2">
                                <span class="icon text-white-50 ">
                                            <i class="fas fa-trash"></i>
                                </span>
                                    <span class="text">Удалить</span>
                                </a>
                            </td>



                        </tr>

                        <template v-if="subCategories">
                            <tr  v-show="isEd === category.id" v-if="!subCategories[index].length">
                                <td colspan="3">
                                    Подкатегории отсутствуют...
                                </td>

                            </tr>
                        </template>


                    </template>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Categories",

    data() {
        return {
            categories: null,
            subCategories: null,
            isEd: null,
            arrDelete: [],
            category: null,
            subCategory: null

        }
    },

    mounted() {
        this.getCategories()
        this.getSubCategories()
    },

    methods: {

        getCategories() {
            axios.get('/api/admins/categories/')
                .then(res => {
                    console.log(res.data.data);
                    this.categories = res.data.data
                })
        },

        getSubCategories() {
            axios.get('/api/admins/subcategories/')
                .then(res => {
                    console.log(res.data.data);
                    this.subCategories = res.data.data
                    console.log(res.data.data[1]);
                })
        },

        createSubCategory(){

            axios.post('/api/admins/subcategories/', {name: this.subCategory, category_id: this.category})
            .then( res =>{
                console.log(res);
                this.subCategory= null
                this.category= null
                this.getCategories()
                this.getSubCategories()
            })

        },

        updateSubCategory(id, name){
            axios.patch(`/api/admins/subcategories/${id}`, {name: name})
                .then(res => {
                    this.getCategories()
                    this.getSubCategories()
                    console.log(res);
                })
        },

        deleteCategory(id) {
            axios.delete(`/api/admins/subcategories/${id}`)
                .then(res => {
                    this.getCategories()
                    this.getSubCategories()
                    console.log()
                })
        },

        isShow(category_id){
            if(category_id !== this.isEd){
                this.isEd = category_id
            }else {
                 this.isEd = null
            }

        }


    },

    computed: {
        isEdit() {


        }

    }

}
</script>

<style scoped>

</style>
