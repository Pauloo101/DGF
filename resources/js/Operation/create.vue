<template>
    <div>
        <button type="button" class="btn btn-success btn-sm shadow" data-toggle="modal"
                data-target="#exampleModalCenter">
            ADD <i class="fa fa-plus"></i>
        </button>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Request Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="createop" @keydown="form.onKeydown($event)">
                        <alert-error :form="form"></alert-error>
                        <div class="modal-body">
                            <div class="form-group">
                                <select v-model="form.name" placeholder="Select Product" name="name"
                                        class="form-control"
                                        :class="{'is-invalid':form.errors.has('name')}">
                                    <option v-for="product in products" >{{product.name}}</option>
                                </select>
                                <has-error :form="form" field="name"></has-error>
                            </div>
                            <input hidden v-model="user" type="number" name="user_id" >
                            <div class="form-group">
                                <input v-model="form.rquantity" type="number" name="rquantity" placeholder="Quantity"
                                       class="form-control"
                                       :class="{ 'is-invalid':form.errors.has('rquantity')}"/>
                                <has-error :form="form" field="rquantity"></has-error>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import VForm from 'vform'
    import AlertError from "vform/src/components/AlertError";
    import HasError from "vform/src/components/HasError";
    export default {
        components: {HasError, AlertError},
        data() {
            return {
                products:[],
                user:[],
                form: new VForm({
                    name:'',
                    rquantity:'',
                    user_id:'',

                })
            }
        },
        created() {
            axios.get('/product-list')
                .then(({data}) => this.products = data);
            axios.get('/user-auth')
                .then(({data})=>this.user = data);
        },
        methods:{
            createop(){
                this.form.post('/productop');
                Toast.fire({
                    type:'success',
                    title:'Request Sent'
                })
            }

        }
    }

</script>